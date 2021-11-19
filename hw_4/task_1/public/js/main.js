const moreBtn = document.getElementById('more');
const groceryList = document.getElementById('grocery-list');

let fromLimit = 25;
const offset = 25;

if (moreBtn) {
    moreBtn.addEventListener('click', () => {
        fetch(`/fetch/from/${fromLimit}/to/${offset}`)
            .then(response => {
                return response.json();
            })
            .then(products => {
                (products.length > 0) ? insertProducts(products, groceryList) : false;
            })
            .catch(error => {
                throw new Error(error);
            });

        fromLimit += offset;
    });
}

function insertProducts(products, list) {
    products.forEach(product => {
        const markup = `<li class="products__item">
                        <a href="/product/id/${product.id}" class="products__link">
                          <img src="${product.img}" alt="${product.title}" class="products__img" width="270" height="270">
                        </a>
                        <h1 class="products__title">${product.title}</h1>
                        <p class="products__description">${product.description}</p>
                        <span class="products__price">Price: ${product.price} &dollar;</span>
                        <button class="products__to-cart">To cart</button>
                      </li>`;
        list.insertAdjacentHTML('beforeend', markup);
    });
}
