document.addEventListener('DOMContentLoaded', _ => {
    animateLogo();
    headerObserver();
});
const reorganizeLogo = () => {
    const logo = document.querySelector(".site-title a");
    if (Boolean(logo)) {
        logo.style.opacity = "1";

        //place content into a span to remove the span later on
        const originalText = document.createElement("span");
        originalText.classList.add("original-text");
        originalText.innerText = logo.textContent;
        logo.innerHTML = originalText.outerHTML;

        //separate the words from the logo
        const separateWords = logo.textContent.split(" ");
        separateWords.forEach(word => {
            let span = document.createElement("span");
            span.classList.add("logo-word");
            span.innerText = word;
            logo.append(span);
        })

        //remove the original text from the DOM
        logo.querySelector('.original-text').remove();

        //Place each letter in a span
        const logoWords = logo.querySelectorAll(".logo-word");
        if (Boolean(logoWords)) {
            logoWords.forEach(word => {
                let originalWord = document.createElement('span');
                originalWord.classList.add('original-word');
                originalWord.innerText = word.textContent;
                word.innerHTML = originalWord.outerHTML;

                let letters = word.textContent.split("");
                letters.forEach(letter => {
                    let letterSpan = document.createElement('span');
                    letterSpan.classList.add('letter');
                    letterSpan.innerText = letter;
                    word.innerHTML += letterSpan.outerHTML;
                })

                word.querySelector('.original-word').remove();
            })
        }
    }
}

const animateLogo = () => {
    reorganizeLogo();
    const logoWords = document.querySelectorAll(".site-title a .logo-word");
    if (Boolean(logoWords)) {
        setTimeout(() => {
            logoWords.forEach(word => {
                let logoLetters = word.querySelectorAll(".letter");
                logoLetters.forEach((letter, index) => {
                    setTimeout(() => {
                        letter.classList.add("animated");
                    }, 100 * index);
                })
            })
        }, 2500)
    }
}

//IntersectionObserver

const headerObserver = _ => {
    const options = {
        root: null,
        rootMargin: "0px 0px -50px 0px",
        threshold: 0,
    };

    let observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('isVisible');
            }
        });
    }, options);

    let elementsToObserve = document.querySelectorAll(".site-branding p");
    if (Boolean(elementsToObserve)) {
        elementsToObserve.forEach(element => {
            observer.observe(element);
        });
    }
};

setTimeout(() => {
    const recatpcha = document.querySelector('.grecaptcha-badge');
    const contactDiv = document.querySelector('#contact');
    if (Boolean(contactDiv)) {
        contactDiv.querySelector('.wpcf7').classList.add('container');
        if (Boolean(recatpcha)) {
            contactDiv.append(recatpcha);
        }
    }
}, 500);