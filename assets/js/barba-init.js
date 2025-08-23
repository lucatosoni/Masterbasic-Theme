// Initialize Barba.js for smooth page transitions
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize Barba
    barba.init({
        // Timeout for transitions
        timeout: 10000,
        
        // Views configuration
        views: [
            {
                namespace: 'home',
                afterEnter() {
                    // Custom code for homepage
                    console.log('Entered homepage');
                },
                beforeLeave() {
                    // Custom code before leaving homepage
                    console.log('Leaving homepage');
                }
            },
            {
                namespace: 'page',
                afterEnter() {
                    // Custom code for pages
                    console.log('Entered page');
                }
            }
        ],

        // Global hooks
        transitions: [
            {
                name: 'fade',
                leave(data) {
                    return new Promise(resolve => {
                        const tl = gsap.timeline({
                            onComplete: resolve
                        });
                        
                        tl.to(data.current.container, {
                            opacity: 0,
                            y: -50,
                            duration: 0.5,
                            ease: "power2.inOut"
                        });
                    });
                },
                
                enter(data) {
                    return new Promise(resolve => {
                        // Scroll to top
                        window.scrollTo(0, 0);
                        
                        const tl = gsap.timeline({
                            onComplete: resolve
                        });
                        
                        tl.fromTo(data.next.container, {
                            opacity: 0,
                            y: 50
                        }, {
                            opacity: 1,
                            y: 0,
                            duration: 0.5,
                            ease: "power2.inOut"
                        });
                    });
                }
            }
        ]
    });

    // Handle WordPress admin bar if present
    if (document.getElementById('wpadminbar')) {
        document.getElementById('wpadminbar').style.position = 'fixed';
        document.getElementById('wpadminbar').style.zIndex = '99999';
    }
    
    console.log('Barba.js initialized for Master Basic WP Theme');
});