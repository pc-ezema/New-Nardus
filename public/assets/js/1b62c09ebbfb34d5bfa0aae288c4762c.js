const getParsedOptions=(options)=>{const allowedEasings=["ease","linear","ease-in","ease-out"];return{duration:options.duration?Math.min(Math.max(0,(Math.ceil(options.duration / 100)*100)),30000):200,delay:options.delay?Math.min(Math.max(0,(Math.ceil(options.delay / 100)*100)),30000):0,easing:allowedEasings.indexOf(options.easing)!==-1?options.easing:allowedEasings[0],once:typeof options.once==="boolean"?options.once:false,};};const animationsLibrary={elements:undefined,options:undefined,init(options={}){this.options=getParsedOptions(options);this._initializeElements();this._initializeBodyElement();this.animateElements();window.addEventListener("scroll",()=>this.animateElements());},animateElements(){if(!this.elements?.length)return;const currentScroll=window.scrollY;const windowHeight=window.innerHeight;const viewportStop=currentScroll+windowHeight;for(const element of this.elements){const{height,top}=element.getBoundingClientRect();const elementAbsoluteTop=top+currentScroll;const elementStop=elementAbsoluteTop+height;const elementIsInViewport=elementAbsoluteTop<viewportStop&&elementStop>currentScroll;if(elementIsInViewport){element.classList.add("scroll-animate");}else if(!this.options.once){element.classList.remove("scroll-animate");}}},reload(){this._initializeElements();this.animateElements();},_initializeElements(){this.elements=document.querySelectorAll("[data-animate]");},_initializeBodyElement(){document.body.dataset.animationEasing=this.options.easing;document.body.dataset.animationDuration=this.options.duration;document.body.dataset.animationDelay=this.options.delay;},};if("TC"in window){TC.animations=animationsLibrary;}else{TC={animations:animationsLibrary};}