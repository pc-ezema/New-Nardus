(function () {
    const handleScroll = () => {
        const header = document.getElementById("main-header");
        if (!header) return;
        let lastScroll = 0;
        const handler = () => {
            const currentScroll = window.scrollY;
            if (currentScroll > 200 && currentScroll > lastScroll) {
                header.classList.add("hidden");
            } else {
                header.classList.remove("hidden");
            }
            if (currentScroll > 0) {
                header.classList.add("inverse");
            } else {
                header.classList.remove("inverse");
            }
            lastScroll = currentScroll;
        };
        handler();
        document.addEventListener("scroll", handler);
    };
    function openMessage() {
        var elements = document.getElementsByClassName("general-open-popup");
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                var element = elements[i];
                element.addEventListener("click", function () {
                    var message = this.dataset.message;
                    var type = this.dataset.type;
                    var cookieName = "";
                    var button = "close";
                    if (this.dataset.cookie) {
                        cookieName = this.dataset.cookie;
                    }
                    if (this.dataset.button) {
                        button = this.dataset.button;
                    }
                    if (message && type) {
                        createPopUp(message, type, cookieName, button);
                    }
                });
            }
        }
    }
    function createPopUp(message, type, cookieName, button) {
        if (
            !document.getElementById("general-popup") &&
            !checkIfCookieIsSet(cookieName)
        ) {
            var popup = document.createElement("div");
            var content = document.createElement("div");
            popup.id = "general-popup";
            content.id = "general-popup-content";
            content.classList.add("type-" + type);
            if (message) {
                if (type === "image") {
                    var img = document.createElement("img");
                    img.src = message;
                    content.appendChild(img);
                }
                if (type === "text") {
                    content.innerHTML = message;
                }
            }
            if (button === "close") {
                var close = document.createElement("div");
                var closeSvg = document.createElementNS(
                    "http://www.w3.org/2000/svg",
                    "svg"
                );
                close.id = "general-popup-close";
                closeSvg.setAttribute("viewBox", "0 0 32 32");
                closeSvg.innerHTML = `<path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2" d="M7 7l18 18"></path>
                                        <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2" d="M7 25l18-18"></path>`;
                close.appendChild(closeSvg);
                content.appendChild(close);
                closePopUp(close, popup, cookieName);
            }
            if (button === "accept") {
                var accept = document.createElement("button");
                accept.id = "general-popup-accept";
                accept.innerHTML = `${TYPO3.lang["accept"]}`;
                content.appendChild(accept);
                closePopUp(accept, popup, cookieName);
            }
            popup.appendChild(content);
            document.getElementsByTagName("body")[0].prepend(popup);
            document
                .getElementsByTagName("body")[0]
                .classList.add("popup-active");
        }
    }
    function closePopUp(button, popup, cookieName) {
        button.addEventListener("click", function () {
            if (cookieName) {
                var expire = new Date();
                expire.setFullYear(expire.getFullYear() + 10);
                document.cookie =
                    cookieName +
                    "=1" +
                    ";expires=" +
                    expire.toUTCString() +
                    ";";
            }
            popup.remove();
            document
                .getElementsByTagName("body")[0]
                .classList.remove("popup-active");
        });
    }
    function checkIfCookieIsSet(cookieName) {
        var name = cookieName + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(";");
        var value = "";
        for (let i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == " ") {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                value = c.substring(name.length, c.length);
            }
        }
        if (value == 1) {
            return true;
        }
        return false;
    }
    function setHeightOfTemplateIframe() {
        if (
            document
                .getElementsByTagName("body")[0]
                .classList.contains("template-pardot")
        ) {
            var iframe = document.getElementById("pardot-form");
            if (iframe) {
                var height = iframe.parentElement.clientHeight;
                var maxHeight = window.innerHeight - 180;
                if (maxHeight < height) {
                    height = maxHeight;
                }
                if (
                    document
                        .getElementById("main-header")
                        .classList.contains("hidden")
                ) {
                    iframe.classList.add("margin");
                    if (!isInViewport(document.getElementById("main-footer"))) {
                        height = height + 100;
                    }
                }
                iframe.style.height = height + "px";
                if (document.getElementById("banner__container")) {
                    var bannerInViewport =
                        document
                            .getElementById("banner__container")
                            .getBoundingClientRect().y *
                            -1 <
                        document
                            .getElementById("banner__container")
                            .getBoundingClientRect().height;
                    iframe.style.top = "0";
                    if (bannerInViewport) {
                        iframe.classList.add("absolute");
                    } else {
                        iframe.classList.add("fixed");
                    }
                } else {
                    iframe.classList.add("fixed");
                }
                if (document.getElementById("banner__container")) {
                    iframe.classList.add("with-banner");
                }
                if (isInViewport(document.getElementById("main-footer"))) {
                    iframe.classList.remove("fixed");
                    iframe.classList.add("absolute");
                }
                window.onscroll = function () {
                    if (isInViewport(document.getElementById("main-footer"))) {
                        if (iframe.classList.contains("fixed")) {
                            iframe.classList.remove("fixed");
                            iframe.classList.add("absolute");
                        }
                    } else {
                        if (iframe.classList.contains("absolute")) {
                            iframe.classList.remove("absolute");
                            iframe.classList.add("fixed");
                        }
                    }
                    if (document.getElementById("banner__container")) {
                        var bannerInViewport =
                            document
                                .getElementById("banner__container")
                                .getBoundingClientRect().y *
                                -1 <
                            document
                                .getElementById("banner__container")
                                .getBoundingClientRect().height;
                        if (bannerInViewport) {
                            iframe.classList.remove("fixed");
                            iframe.classList.add("absolute");
                            iframe.style.top = "0";
                        } else {
                            iframe.classList.remove("absolute");
                            iframe.classList.add("fixed");
                        }
                        if (
                            isInViewport(document.getElementById("main-footer"))
                        ) {
                            if (iframe.classList.contains("fixed")) {
                                iframe.classList.remove("fixed");
                                iframe.classList.add("absolute");
                                iframe.style.top = "auto";
                            }
                        } else {
                            iframe.style.top = "0";
                        }
                    }
                    if (
                        document
                            .getElementById("main-header")
                            .classList.contains("hidden")
                    ) {
                        if (!iframe.classList.contains("margin")) {
                            iframe.classList.add("margin");
                            if (
                                document
                                    .getElementById("content")
                                    .getBoundingClientRect().height >
                                window.innerHeight
                            ) {
                                iframe.style.height =
                                    parseInt(iframe.style.height) + 100 + "px";
                            }
                        }
                    } else {
                        if (iframe.classList.contains("margin")) {
                            iframe.classList.remove("margin");
                            if (
                                document
                                    .getElementById("content")
                                    .getBoundingClientRect().height >
                                window.innerHeight
                            ) {
                                iframe.style.height =
                                    parseInt(iframe.style.height) - 100 + "px";
                            }
                        }
                    }
                };
            }
        }
    }
    function isInViewport(element) {
        var elementTop = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;
        var entryPoint = elementTop - windowHeight;
        return entryPoint < 0;
    }
})();
