'use strict'

const catalogueDb = [
    {
        id: 1,
        name: 'antologia dark',
        oldPrice: 'R$ 54,90',
        newPrice: 'R$ 49,41',
        image: './img/antologia-dark.png',
        gender: '',
    },
    {
        id: 2,
        name: 'evangelho de sangue',
        oldPrice: '',
        newPrice: 'R$ 41,90',
        image: './img/evangelho-sangue.png',
        gender: '',
    },
    {
        id: 3,
        name: 'legião',
        oldPrice: '',
        newPrice: 'R$ 31,80',
        image: './img/legiao.png',
        gender: '',
    },
    {
        id: 4,
        name: 'medicina macabra',
        oldPrice: '',
        newPrice: 'R$ 43,90',
        image: './img/medicina-macabra.png',
        gender: '',
    },
    {
        id: 5,
        name: 'vitorianas macabras',
        oldPrice: 'R$ 43,90',
        newPrice: 'R$ 36,87',
        image: './img/vitorianas-macabras.png',
        gender: '',
    },
    {
        id: 6,
        name: 'btk profile: máscara da maldade',
        antigoPreco: '',
        newPrice: 'R$ 53,90',
        image: './img/btk-profile.png',
        gender: 'terror',
    },

]

const creatingGenderSession = () => {
    
}

const creatingCard = (product) => {
    const catalogueCard = document.createElement('div')
    catalogueCard.classList.add('catalogue-container')
    catalogueCard.innerHTML =
        `<div class="product">
            <img src="${product.image}">
        </div>
        <div class="description">
            <span class="title">${product.name}</span>
            <span class="old-price">${product.oldPrice}</span>
            <span class="new-price">${product.newPrice}</span>
        <div class="see-more">
            <div class="line"></div>
            <a href="#" class="details">ver detalhes</a>
        </div>`

    return catalogueCard
}

const loadingCatalogue = (products) => {
    const container = document.querySelector('#session')
    const cards = products.map(creatingCard)

    container.replaceChildren(...cards)
}

loadingCatalogue(catalogueDb)
creatingGenderSession(catalogueDb)