/* Conunt */
const counters = document.querySelectorAll('.count');
const speed = 90;

const startCounting = () => {
    const options = {
        threshold: 0.7
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = Number(counter.getAttribute('data-target'));
                        const count = Number(counter.innerText.replace(/\+/g, ''));
                        const increment = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + increment);
                            setTimeout(updateCount, 20);
                        } else {
                            counter.innerText = target + '+';
                        }
                    };

                    updateCount();
                });

                observer.unobserve(entry.target);
            }
        });
    }, options);
    observer.observe(document.querySelector('.count-section'));
};
startCounting();

/*Faqs*/
document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll('.box');
    boxes.forEach(box => {
        box.addEventListener('click', function() {
            this.classList.toggle('active');
            const icon = this.querySelector('.icon');
            if (this.classList.contains('active')) {
                icon.textContent = '-';
            } else {
                icon.textContent = '+';
            }
        });
    });
});

//Opening Hours
document.addEventListener('DOMContentLoaded', function() {
    const videoPlayer = document.getElementById('iframe_YTP_1724583170889');
    const image = document.querySelector('.hours-thumb img');

    function playVideo() {
        image.style.display = 'none'; 
        videoPlayer.style.display = 'block'; 

        let currentSrc = videoPlayer.src;
        if (!currentSrc.includes("autoplay=1")) {
            videoPlayer.src += (currentSrc.includes('?') ? '&' : '?') + "autoplay=1&mute=1&loop=1&playlist=xPPLbEFbCAo";
        }
    }

    setTimeout(playVideo, 2000); 
});



