// Row for the projects
var row = document.getElementById("reviews-row")

// All projects object
var reviews = {
    1: {
        author: {
            name: 'Rens Verbeek',
            company: 'The Student Broker',
            img: {
                url: '../img/reviews/the-student-broker.png',
                alt: 'The Student Broker'
            }
        },
        description: 'Thank you for making it painless, pleasant and most of all hassle free! Its really wonderful. Weve used KB Creative for the last five years. KB Creative is both attractive and highly adaptable.'
    },
    2: {
        author: {
            name: 'Freek Vonk',
            company: 'Innosons Media',
            img: {
                url: '../img/reviews/innosons.png',
                alt: 'Innosons Media'
            }
        },
        description: 'Its really wonderful. KB Creative was worth a fortune to my company. I didnt even need training.'
    },
    3: {
        author: {
            name: 'John Doe',
            company: 'The Student Broker',
            img: {
                url: '../img/reviews/the-student-broker.png',
                alt: 'The Student Broker'
            }
        },
        description: 'I would like to personally thank you for your outstanding product. I couldnt have asked for more than this. I would like to personally thank you for your outstanding product.'
    }

}

// Display all properties in html per reviews in reviews object
for (const key in reviews) {
    if (reviews.hasOwnProperty(key)) {
        const element = reviews[key];
        row.innerHTML += `
        <div class="column">
            <div class="review-content">
                <p style="color: white; font-size: 18px;">${element.description}</p>
                <p class="review-author">${element.author.name} - ${element.author.company}</p>
                <img src="${element.author.img.url}" alt="${element.author.img.alt}" loading="lazy" class="review-logo">
            </div>
        </div>
        `;
    }
}
