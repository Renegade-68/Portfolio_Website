// Header animation
document.addEventListener("DOMContentLoaded", () => {
    const lines = [
        { text: "// Don't forget to introduce yourself!", class: "green-text" },
        { 
            text: [
                { part: "cout << ", class: "white-text" },
                { part: '"Hello, I\'m Reno!"', class: "orange-text" },
                { part: ";", class: "white-text" }
            ]
        }
    ];

    let currentLine = 0;
    let currentChar = 0;
    const typingSpeed = 100; // milliseconds
    const delayBetweenLines = 1000; // delay before typing the next line
    const textElement = document.getElementById("typing-text");

    function type() {
        const line = lines[currentLine];
        
        if (typeof line.text === "string") {
            // Single-style line
            if (currentChar < line.text.length) {
                const charSpan = document.createElement("span");
                charSpan.textContent = line.text[currentChar];
                charSpan.className = line.class;
                textElement.appendChild(charSpan);

                currentChar++;
                setTimeout(type, typingSpeed);
            } else if (currentLine < lines.length - 1) {
                currentLine++;
                currentChar = 0;
                setTimeout(() => {
                    textElement.innerHTML += "\n";
                    type();
                }, delayBetweenLines);
            }
        } else {
            // Multi-style line
            const parts = line.text;
            let totalChars = parts.reduce((sum, part) => sum + part.part.length, 0);
            let charCounter = 0;

            for (let i = 0; i < parts.length; i++) {
                const part = parts[i];
                if (currentChar >= charCounter && currentChar < charCounter + part.part.length) {
                    const charSpan = document.createElement("span");
                    charSpan.textContent = part.part[currentChar - charCounter];
                    charSpan.className = part.class;
                    textElement.appendChild(charSpan);
                    currentChar++;
                    setTimeout(type, typingSpeed);
                    return;
                }
                charCounter += part.part.length;
            }

            // If finished with this line
            if (currentChar >= totalChars && currentLine < lines.length - 1) {
                currentLine++;
                currentChar = 0;
                setTimeout(() => {
                    textElement.innerHTML += "\n";
                    type();
                }, delayBetweenLines);
            }
        }
    }

    type();
});

function scrollToSection(navClass, sectionId) {
    const navElements = document.getElementsByClassName(navClass);

    if (navElements.length > 0) {
        Array.from(navElements).forEach((navElement) => {
            navElement.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default anchor behavior

                if (sectionId === "home") {
                    // Scroll to the top of the page
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth" // Smooth scrolling effect
                    });
                } else {
                    const sectionElement = document.getElementById(sectionId);

                    if (sectionElement) {
                        const sectionBottom = sectionElement.getBoundingClientRect().bottom;
                        const viewportHeight = window.innerHeight;

                        // Calculate scroll position to align section's bottom with the viewport's bottom
                        const scrollToPosition = window.scrollY + sectionBottom - viewportHeight;

                        window.scrollTo({
                            top: scrollToPosition,
                            behavior: "smooth" // Smooth scrolling effect
                        });
                    }
                }
            });
        });
    }
}

// Map navigation classes to their corresponding sections
const navToSectionMap = {
    home: "home", // Special case for scrolling to the top
    about: "aboutmeContainer",
    projects: "projectsContainer",
    study: "studyContainer",
    contact: "contactContainer"
};

// Add event listeners for all navigation links
Object.entries(navToSectionMap).forEach(([navClass, sectionId]) => {
    scrollToSection(navClass, sectionId);
});

