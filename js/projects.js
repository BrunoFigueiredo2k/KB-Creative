// Row for the projects
var row1 = document.getElementById('projects-row-1');

// All projects object
var projects = {
	1: {
		name: 'The Student Broker',
		description:
			'The Student Broker is a platform where international students can sign up to find accommodation in the Netherlands.',
		img: {
			url: '../img/projects/project-tsb.jpg',
			tag: 'The Student Broker'
		},
		url: 'https://thestudentbroker.com/pages/index.php',
		type: 'Website'
	},
	2: {
		name: 'Feedbackpin',
		description:
			'Feedbackpin is an online tool which can be used by designers/web developers to gather user feedback on their websites.',
		img: {
			url: '../img/projects/project-feedbackpin.JPG',
			tag: 'Feedbackpin tool'
		},
		url: 'https://feedbackpin.com/',
		type: 'Online tool'
	},
	3: {
		name: 'Renticat',
		description:
			'Renticat is a platform where people can sign up to find housing in the Netherlands. Brokers and landlords can post their listings.',
		img: {
			url: '../img/projects/renticat_project.jpg',
			tag: 'Renticat'
		},
		url: 'https://frontend.renticat.com/',
		type: 'Website'
	}
};

// Display all properties in html per project in projects object
for (const key in projects) {
	if (projects.hasOwnProperty(key)) {
		const element = projects[key];
		row1.innerHTML += `
        <div class="column">
            <div class="card project-card">
                <div class="project-top">
                    <img src="${element.img.url}" tag="${element.img.tag}" loading="lazy" width="70">
                </div>
                <div class="project-bottom">
                    <h2 class="subheading">${element.name} <span class="project-type">${element.type}</span></h2>
                    <p>${element.description}</p><br>
                    <a href="${element.url}" rel="noopener" target="_blank" class="btn-project">View project <i
                            class="fas fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
        `;
	}
}
