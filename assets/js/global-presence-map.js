// Map location plotting
const countriesData = [
    {
        country: 'Algeria',
        cities: ['El Djazair'],
        className: 'algeria'
    },
    {
        country: 'Angola',
        cities: ['Luanda'],
        className: 'angola'
    },
    {
        country: 'Australia',
        cities: ['Southport'],
        className: 'australia'
    },
    {
        country: 'Belgium',
        cities: ['Wommelgem'],
        className: 'belgium'
    },
    {
        country: 'Brazil',
        cities: ['Porto Velho Itajubá'],
        className: 'brazil'
    },
    {
        country: 'Bulgaria',
        cities: ['Blagoevgrad'],
        className: 'bulgaria'
    },
    {
        country: 'Canada',
        cities: ['Montreal Quebec'],
        className: 'canada'
    },
    {
        country: 'China',
        cities: ['Jiading, Shangai', 'Hongkou, Shangai'],
        className: 'shangai'
    },
    {
        country: 'Colombia',
        cities: ['Valle del Cauca'],
        className: 'colombia'
    },
    {
        country: 'Denmark',
        cities: ['Nykøbing Falster'],
        className: 'denmark'
    },
    {
        country: 'Egypt',
        cities: ['Cairo'],
        className: 'egypt'
    },
    {
        country: 'France',
        cities: ['Paris'],
        className: 'paris'
    },
    {
        country: 'Germany',
        cities: ['Lich'],
        className: 'germany'
    },
    {
        country: 'Greece',
        cities: ['Athens'],
        className: 'greece'
    },
    {
        country: 'Hungary',
        cities: ['Honvéd u.'],
        className: 'hungary'
    },
    {
        country: 'Hongkong',
        cities: ['North Point'],
        className: 'hongkong'
    },
    {
        country: 'India',
        cities: ['Navi-Mumbai'],
        className: 'navimumbai'
    },
    {
        country: 'India',
        cities: ['Noida'],
        className: 'noida'
    },
    {
        country: 'Indonesia',
        cities: ['Jakarta'],
        className: 'indonesia'
    },
    {
        country: 'Ireland',
        cities: ['Dublin'],
        className: 'ireland'
    },
    {
        country: 'Israel',
        cities: ['Kiryat Yam'],
        className: 'israel'
    },
    {
        country: 'Italy',
        cities: ['Rieti'],
        className: 'italy'
    },
    {
        country: 'Japan',
        cities: ['Tokyo'],
        className: 'japan'
    },
    {
        country: 'Kenya',
        cities: ['Nairobi'],
        className: 'kenya'
    },
    {
        country: 'Madagascar',
        cities: ['Antananarivo'],
        className: 'madagascar'
    },
    {
        country: 'Malaysia',
        cities: ['Kuala Lumpur'],
        className: 'malaysia'
    },
    {
        country: 'Mexico',
        cities: ['Playa del Carmen'],
        className: 'mexico'
    },
    {
        country: 'Morocco',
        cities: ['Casablanca'],
        className: 'morocco'
    },
    {
        country: 'Netherlands',
        cities: ['CW Eindhoven'],
        className: 'netherlands'
    },
    {
        country: 'New Zealand',
        cities: ['Wellington'],
        className: 'new-zealand'
    },
    {
        country: 'Nevis',
        cities: ['Charlestown'],
        className: 'nevis'
    },
    {
        country: 'Nigeria',
        cities: ['Anthony Lagos'],
        className: 'nigeria'
    },
    {
        country: 'Norway',
        cities: ['Oslo'],
        className: 'norway'
    },
    {
        country: 'Pakistan',
        cities: ['Islamabad'],
        className: 'pakistan'
    },
    {
        country: 'Philippines',
        cities: ['Pasig'],
        className: 'philippines'
    },
    {
        country: 'Poland',
        cities: ['Kraków'],
        className: 'poland'
    },
    {
        country: 'Portugal',
        cities: ['Lisbon'],
        className: 'portugal'
    },
    {
        country: 'Puerto Rico',
        cities: ['Las Piedras'],
        className: 'puerto-rico'
    },
    {
        country: 'Romania',
        cities: ['Quadra Place'],
        className: 'romania'
    },
    {
        country: 'Russia',
        cities: ['Moscow'],
        className: 'russia'
    },
    {
        country: 'Saudi Arabia',
        cities: ['Riyadh'],
        className: 'saudi-arabia'
    },
    {
        country: 'Senegal',
        cities: ['Sacre Coeur 3, Dakar'],
        className: 'senegal'
    },
    {
        country: 'Serbia',
        cities: ['Topola'],
        className: 'serbia'
    },
    {
        country: 'Singapore',
        cities: ['Peninsula Plaza'],
        className: 'singapore'
    },
    {
        country: 'Slovakia',
        cities: ['Bratislava'],
        className: 'slovakia'
    },
    {
        country: 'South Africa',
        cities: ['Capetown'],
        className: 'southafrica'
    },
    {
        country: 'South Korea',
        cities: ['Seoul'],
        className: 'south-korea'
    },
    {
        country: 'Spain',
        cities: ['Terrassa (Barcelona)'],
        className: 'spain'
    },
    {
        country: 'Sweden',
        cities: ['Lund'],
        className: 'sweden'
    },
    {
        country: 'Switzerland',
        cities: ['Zug'],
        className: 'switzerland'
    },
    {
        country: 'Thailand',
        cities: ['Phuket'],
        className: 'thailand'
    },
    {
        country: 'Tunisia',
        cities: ['Tunis'],
        className: 'tunisia'
    },
    {
        country: 'Turkey',
        cities: ['Cankaya-Ankara'],
        className: 'turkey'
    },
    {
        country: 'UAE',
        cities: ['Dubai'],
        className: 'dubai'
    },
    {
        country: 'Ukraine',
        cities: ['Lviv'],
        className: 'ukraine'
    },
    {
        country: 'United Kingdom',
        cities: ['Bracknell'],
        className: 'uk'
    },
    {
        country: 'Uruguay',
        cities: ['Montevideo'],
        className: 'uruguay'
    },
    {
        country: 'USA',
        cities: ['Sussex Delaware'],
        className: 'usa'
    },
    {
        country: 'Vietnam',
        cities: ['Ho Chi Minh City'],
        className: 'vietnam'
    }
];

const container = document.querySelector('.map-container');

countriesData.forEach(
    ({
        country,
        cities,
        className
    }) => {
        const countryDiv = document.createElement('div');
        countryDiv.className = `countries-position ${className}`;

        countryDiv.innerHTML = `
        <div class="countries-spot-point branch"></div>
        <div class="countries-spot-container">
            <div class="country-name">${country}</div>
            <ul class="city-name">
                ${cities.map(city => `<li>${city}</li>`).join('')}
            </ul>
        </div>
        `;

        container.appendChild(countryDiv);
    }
);

// Dropdown and slider

const countryData = {
    "Algeria": [{
        "algeria": "El Djazair"
    }],
    "Angola": [{
        "angola": "Luanda"
    }],
    "Australia": [{
        "australia": "Southport"
    }],
    "Belgium": [{
        "belgium": "Wommelgem"
    }],
    "Brazil": [{
        "brazil": "Porto Velho Itajubá"
    }],
    "Bulgaria": [{
        "bulgaria": "Blagoevgrad"
    }],
    "Canada": [{
        "canada": "Montreal Quebec"
    }],
    "China": [{
        "shangai": "Jiading, Shangai"
    },
    {
        "shangai": "Hongkou, Shangai"
    }
    ],
    "Colombia": [{
        "colombia": "Valle del Cauca"
    }],
    "Denmark": [{
        "denmark": "Nykøbing Falster"
    }],
    "Egypt": [{
        "egypt": "Cairo"
    }],
    "France": [{
        "paris": "Paris"
    }],
    "Germany": [{
        "germany": "Lich"
    }],
    "Greece": [{
        "greece": "Athens"
    }],
    "Hungary": [{
        "hungary": "Honvéd u."
    }],
    "Hongkong": [{
        "hongkong": "North Point"
    }],
    "India": [{
        "navimumbai": "Navi-Mumbai"
    },
    {
        "noida": "Noida"
    }
    ],
    "Indonesia": [{
        "indonesia": "Jakarta"
    }],
    "Ireland": [{
        "ireland": "Dublin"
    }],
    "Israel": [{
        "israel": "Kiryat Yam"
    }],
    "Italy": [{
        "italy": "Rieti"
    }],
    "Japan": [{
        "japan": "Tokyo"
    }],
    "Kenya": [{
        "kenya": "Nairobi"
    }],
    "Madagascar": [{
        "madagascar": "Antananarivo"
    }],
    "Malaysia": [{
        "malaysia": "Kuala Lumpur"
    }],
    "Mexico": [{
        "mexico": "Playa del Carmen"
    }],
    "Morocco": [{
        "morocco": "Casablanca"
    }],
    "Netherlands": [{
        "netherlands": "CW Eindhoven"
    }],
    "New Zealand": [{
        "new-zealand": "Wellington"
    }],
    "Nevis": [{
        "nevis": "Charlestown"
    }],
    "Nigeria": [{
        "nigeria": "Anthony Lagos"
    }],
    "Norway": [{
        "norway": "Oslo"
    }],
    "Pakistan": [{
        "pakistan": "Islamabad"
    }],
    "Philippines": [{
        "philippines": "Pasig"
    }],
    "Poland": [{
        "poland": "Kraków"
    }],
    "Portugal": [{
        "portugal": "Lisbon"
    }],
    "Puerto Rico": [{
        "puerto-rico": "Las Piedras"
    }],
    "Romania": [{
        "romania": "Quadra Place"
    }],
    "Russia": [{
        "russia": "Moscow"
    }],
    "Saudi Arabia": [{
        "saudi-arabia": "Riyadh"
    }],
    "Senegal": [{
        "senegal": "Sacre Coeur 3, Dakar"
    }],
    "Serbia": [{
        "serbia": "Topola"
    }],
    "Singapore": [{
        "singapore": "Peninsula Plaza"
    }],
    "Slovakia": [{
        "slovakia": "Bratislava"
    }],
    "South Africa": [{
        "southafrica": "Capetown"
    }],
    "South Korea": [{
        "south-korea": "Seoul"
    }],
    "Spain": [{
        "spain": "Terrassa (Barcelona)"
    }],
    "Sweden": [{
        "sweden": "Lund"
    }],
    "Switzerland": [{
        "switzerland": "Zug"
    }],
    "Thailand": [{
        "thailand": "Phuket"
    }],
    "Tunisia": [{
        "tunisia": "Tunis"
    }],
    "Turkey": [{
        "turkey": "Cankaya-Ankara"
    }],
    "UAE": [{
        "dubai": "Dubai"
    }],
    "Ukraine": [{
        "ukraine": "Lviv"
    }],
    "United Kingdom": [{
        "uk": "Bracknell"
    }],
    "Uruguay": [{
        "uruguay": "Montevideo"
    }],
    "USA": [{
        "usa": "Sussex Delaware"
    }],
    "Vietnam": [{
        "vietnam": "Ho Chi Minh City"
    }]
};

// Function to populate the dropdowns
function populateDropdown(dropdownElement) {
    const sortedCountries = Object.keys(countryData).sort(); // Sort countries alphabetically.

    sortedCountries.forEach(country => {
        const optgroup = document.createElement('optgroup');
        optgroup.label = country;

        // Iterate over the list of city objects for each country
        countryData[country].forEach(cityObject => {
            const uniqueClass = Object.keys(cityObject)[0]; // Get the unique class
            const cityName = cityObject[uniqueClass]; // Get the city name

            const option = document.createElement('option');
            option.value = `${country} - ${cityName}`; // Set the value to 'Country - City'
            option.textContent = cityName; // Correctly display the city name
            optgroup.appendChild(option);
        });

        dropdownElement.appendChild(optgroup);
    });
}

// Populate the dropdowns and add event listeners on page load
window.onload = function () {
    const dropdowns = document.querySelectorAll('.countryCityDropdown');

    dropdowns.forEach(dropdown => {
        // Populate each dropdown
        populateDropdown(dropdown);

        // Event listener for the change event of each dropdown
        dropdown.addEventListener('change', function () {
            const selectedValue = this.value;

            if (selectedValue) {
                highlightCountryPosition(selectedValue); // Highlight country data based on the selected city
            }
        });
    });
};

// Function to add active class based on selected city
function highlightCountryPosition(selectedValue) {
    // Clear any previous highlights for all country-data
    document.querySelectorAll('.country-data').forEach(element => {
        element.classList.remove('active');
    });

    // Get the country and city from the selected value
    const [country, city] = selectedValue.split(' - ');

    // Search for the unique class corresponding to the selected city
    const cityData = countryData[country]?.find(cityObject => {
        return Object.values(cityObject)[0] === city;
    });

    if (cityData) {
        const uniqueClass = Object.keys(cityData)[0]; // Get the unique class

        const countrySlide = document.querySelector('.countries-data-card-slide');

        const countryElement = document.querySelector(`.countries-position.${uniqueClass}`);
        if (countryElement) {

            const countriesPosition = document.querySelectorAll('.countries-position');
            countriesPosition.forEach(country => {
                country.classList.remove('active');
            })

            countryElement.classList.add('active');

            const countrySlideClass = countrySlide.querySelectorAll('.country-data');
            countrySlideClass.forEach(city => {
                city.classList.remove('active');
            })

            const countrySlideClassActive = countrySlide.querySelector(`.country-data.${uniqueClass}`);
            if (countrySlideClassActive) {
                countrySlide.style.left = "0px";
                countrySlide.style.opacity = "1";
                countrySlideClassActive.classList.add('active');
            } else {
                alert('No data available');
            }

        } else {
            alert('Unique Class not available');
        }

    } else {
        alert('No data available');
    }
}

// Hovering on Map Locations
const countries = document.querySelectorAll('.countries-position');

countries.forEach(country => {
    country.addEventListener('mouseover', () => {
        countries.forEach(country => {
            country.classList.remove('active');
        })

        country.classList.add('active');
    });

    country.addEventListener('mouseout', () => {
        country.classList.add('active');
    });
});

// Slide Close Button
const slideCloseBtn = document.querySelector('.countries-data-card-slide .slide-nav .slide-close-btn');
const countrySlide = document.querySelector('.countries-data-card-slide');

slideCloseBtn.onclick = () => {

    if (countrySlide.style.left == "0px" && countrySlide.style.opacity == "1") {
        countrySlide.style.left = "-360px";
        countrySlide.style.opacity = "0";
    }
}