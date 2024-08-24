document.addEventListener('DOMContentLoaded', function() {
    const services = [
        { name: 'Business Cards', description: 'High-quality, customizable business cards.', price: '$50', quantity: '100 cards', imgSrc: 'https://via.placeholder.com/150' },
        { name: 'Flyers & Brochures', description: 'Design and print eye-catching flyers and brochures.', price: '$100', quantity: '500 flyers', imgSrc: 'https://via.placeholder.com/150' },
        { name: 'Banners & Posters', description: 'Large format printing for banners and posters.', price: '$150', quantity: '2 banners', imgSrc: 'https://via.placeholder.com/150' },
        { name: 'Custom T-Shirts', description: 'Personalized t-shirt printing for events and promotions.', price: '$200', quantity: '50 shirts', imgSrc: 'https://via.placeholder.com/150' },
        { name: 'Advertising Materials', description: 'Print ads, signs, and promotional materials.', price: '$250', quantity: 'Various items', imgSrc: 'https://via.placeholder.com/150' },
        { name: 'Stationery', description: 'Custom stationery for all your business and personal needs.', price: '$75', quantity: '200 items', imgSrc: 'https://via.placeholder.com/150' }
    ];

    const renderItems = (items) => {
        const tableBody = document.getElementById('services-table-body');
        tableBody.innerHTML = ''; // Clear previous items
        let row;
        items.forEach((item, index) => {
            if (index % 3 === 0) {
                row = tableBody.insertRow();
            }
            const cell = row.insertCell();
            cell.innerHTML = `
                <div class="item">
                    <img src="${item.imgSrc}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <p>${item.description}</p>
                    <p class="price">${item.price}</p>
                    <p class="quantity">${item.quantity}</p>
                    <button class="button">Learn More</button>
                </div>
            `;
        });
    };

    renderItems(services);

    document.getElementById('search-button').addEventListener('click', () => {
        const query = document.getElementById('search-input').value.toLowerCase();
        const filteredServices = services.filter(service => 
            service.name.toLowerCase().includes(query) || 
            service.description.toLowerCase().includes(query)
        );
        renderItems(filteredServices);
    });
});
