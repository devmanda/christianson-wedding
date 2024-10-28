import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    // Handle mobile menu toggle
    const button = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
    const menu = document.getElementById('navbar-sticky');

    if (button && menu) {
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    // Enhanced smooth scrolling
    document.querySelectorAll('#navbar-sticky a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            // Close mobile menu if open
            if (window.innerWidth < 768) {
                menu.classList.add('hidden');
            }

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const headerOffset = 0; // Adjust this value based on your navbar height
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.scrollY - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    const leftFlower = document.getElementById('leftFlower');
    const rightFlower = document.getElementById('rightFlower');
    const leftFlower2 = document.getElementById('leftFlower2');
    const rightFlower2 = document.getElementById('rightFlower2');

    let currentLeftPosition = 0;
    let currentRightPosition = 0;
    let currentLeftPosition2 = 0;
    let currentRightPosition2 = 0;
    let targetLeftPosition = 0;
    let targetRightPosition = 0;

    // Smoothing factor - lower = smoother but slower
    const smoothing = 0.075;

    function lerp(start, end, factor) {
        return start + (end - start) * factor;
    }

    function animate() {
        // Calculate target positions
        targetLeftPosition = window.scrollY * 0.1;
        targetRightPosition = window.scrollY * -0.1;

        // Smoothly interpolate to target positions
        currentLeftPosition = lerp(currentLeftPosition, targetLeftPosition, smoothing);
        currentRightPosition = lerp(currentRightPosition, targetRightPosition, smoothing);
        currentLeftPosition2 = lerp(currentLeftPosition2, targetLeftPosition, smoothing);
        currentRightPosition2 = lerp(currentRightPosition2, targetRightPosition, smoothing);

        // Apply transforms
        leftFlower.style.transform = `translateY(${currentLeftPosition}px)`;
        rightFlower.style.transform = `translateY(${currentRightPosition}px)`;
        leftFlower2.style.transform = `translateY(${currentLeftPosition2}px)`;
        rightFlower2.style.transform = `translateY(${currentRightPosition2}px)`;

        requestAnimationFrame(animate);
    }

    animate();
});