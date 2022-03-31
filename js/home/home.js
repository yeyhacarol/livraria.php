'use strict'
const promotionDb = [
    {
        id: 1,
        title: 'o menino que desenhava monstros',
        author: 'Keith Donohue',
        description: 'desde que quase se afogou no oceano três anos antes, Jack Peter Keenan, de dez anos, tem um medo mortal de se aventurar ao ar livre. Recusando-se a deixar sua casa em uma pequena cidade costeira do Maine, Jack Peter passa seu tempo desenhando monstros. Quando esses desenhos ganham vida própria, ninguém está a salvo do terror que inspiram. Sua mãe, Holly, começa a ouvir sons estranhos à noite vindos do oceano, e ela busca respostas do padre católico local e de sua governanta japonesa, que enchem sua cabeça com histórias de naufrágios e fantasmas. Seu pai, Tim, vagueia pela praia, procurando freneticamente por uma estranha aparição correndo solta nas dunas. E o único amigo do menino, Nick, fica desamparado no poder misterioso dos desenhos. Enquanto aqueles ao redor de Jack Peter são assombrados pelo que eles pensam que vêem, só ele sabe a verdade por trás das ocorrências assustadoras enquanto o mundo exterior invade todos eles.',
        gender: 'ficção',
        oldPrice: 'R$ 56,63',
        newPrice: 'R$ 48,30',
        image: './img/menino-que-desenhava-monstros.png',
    },
    {
        id: 2,
        title: 'ed & lorraine warren - demonologistas',
        author: 'Gerald Brittle',
        description: 'o demonologista revela o grave processo religioso por trás de eventos sobrenaturais e como isso pode acontecer com você. Usado como texto em seminários e salas de aula, este é um livro que você não consegue largar. Por mais de cinco décadas, Ed e Loraine Warren foram considerados os maiores especialistas da América em demonologia e exorcismo. Com mais de 3.000 investigações em seu crédito, eles revelam o que realmente quebra a paz em casas assombradas.',
        gender: 'biografia',
        oldPrice: 'R$ 39,20',
        newPrice: 'R$ 27,44',
        image: './img/demonologistas.png',
    },
    {
        id: 3,
        title: 'amityville',
        author: 'Jay Anson',
        description: 'baseado nas alegações de experiências paranormais da família Lutz, mas gerou polêmica e ações judiciais sobre sua veracidade.',
        gender: 'horror',
        oldPrice: 'R$ 74,99',
        newPrice: 'R$ 69,99',
        image: './img/amityville.png',
    },
]


const catalogueDb = [
    {
        id: 1,
        title: 'antologia dark',
        author: 'Cesar Bravo e outros',
        description: 'antologia dark, uma homenagem à obra de Stephen King e um agradecimento por suas palavras terem formado leitores e vidas. A antologia é o primeiro volume de uma coleção que vai promover a importância do conto no universo do horror e o diálogo entre autores nacionais e grandes mestres da literatura dark.',
        gender: 'ficção',
        oldPrice: 'R$ 54,90',
        newPrice: 'R$ 49,41',
        image: './img/antologia-dark.png',
    },
    {
        id: 2,
        title: 'evangelho de sangue',
        author: 'Clive Barker',
        description: 'todo mal tem uma origem. Pinhead está de volta Por aproximadamente trinta anos o Sacerdote do Inferno – conhecido por todos nós pela sugestiva alcunha de Pinhead – tem sido um dos mais ilustres e famosos personagens do universo do terror de todos os tempos. É o capítulo final desta saga, que teve início com Hellraiser – Renascido do Inferno.',
        gender: 'ficção',
        oldPrice: '',
        newPrice: 'R$ 41,90',
        image: './img/evangelho-sangue.png',
    },
    {
        id: 3,
        title: 'legião',
        author: 'Willian Peter Blatty',
        description: 'legião é a verdadeira continuação de O Exorcista. Personagens e acontecimentos importantes do primeiro livro encarnam novamente nas páginas deste romance que Blatty publicou em 1983 e que finalmente sai no Brasil com seu título original. Alguns segredos da história de 1971 são revelados aqui, então é aconselhável ler O Exorcista antes de encarar Legião.',
        gender: 'ficção',
        oldPrice: '',
        newPrice: 'R$ 31,80',
        image: './img/legiao.png',
    },
    {
        id: 4,
        title: 'medicina macabra',
        author: 'Thomas Morris',
        description: 'da Holanda do século XVII até a Rússia czarista, da zona rural do Canadá até um baleeiro no Pacífico, Medicina Macabra é uma reunião de casos insólitos da história da Medicina que ocorreram em um período de trezentos anos. Alguns desses relatos são angustiantes ou comoventes, outros são macabros, mas todos oferecem algo mais além do que uma boa anedota. Por mais constrangedoras que sejam as enfermidades, por mais estranhos que sejam os tratamentos, todos esses casos expressam algo sobre as crenças e a sabedoria de uma época.',
        gender: 'biografia',
        oldPrice: '',
        newPrice: 'R$ 43,90',
        image: './img/medicina-macabra.png',
    },
    {
        id: 5,
        title: 'vitorianas macabras',
        author: 'Charlotte Brontë e outras',
        description: 'a coletânea traz treze autoras vitorianas que escreviam, entre outros gêneros, contos de horror. O intuito é dar visibilidade ao trabalho de mulheres, muitas delas pioneiras, na Era vitoriana, mas que acabaram no ostracismo logo após suas mortes. A obra é uma tentativa de reparar um erro histórico que levou ao quase anonimato muitas destas autoras.',
        gender: '',
        oldPrice: 'R$ 43,90',
        newPrice: 'R$ 36,87',
        image: './img/vitorianas-macabras.png',
    },
    {
        id: 6,
        title: 'btk profile: máscara da maldade',
        author: 'Roy Wenzl e outros',
        description: 'ao longo de três décadas, um monstro aterrorizou os moradores de Wichita, Kansas. Um assassino em série que amarrava, torturava e matava mulheres, homens e crianças, iludiu a polícia por anos a fio enquanto se vangloriava de suas terríveis façanhas para a mídia. A nação ficou chocada quando os crimes de BTK ― a sigla para os termos em inglês bind, torture, kill, que eram sua assinatura criminosa ― foram enfim associados a Dennis Rader.',
        gender: 'crime scene',
        oldPrice: '',
        newPrice: 'R$ 53,90',
        image: './img/btk-profile.png',
    },

]

const creatingCard = (product) => {
    const catalogueCard = document.createElement('div')
    catalogueCard.classList.add('catalogue-container')
    catalogueCard.innerHTML =
        `<div class="product">
            <img src="${product.image}">
        </div>
        <div class="description">
            <div class="description-content">      
                <span class="title">${product.title}</span>
                <span class="old-price">${product.oldPrice}</span>
                <span class="new-price">${product.newPrice}</span>
            </div>
        </div>
        <div class="description details">
        <div class="line"></div>
            <div class="see-more">
                <a href="#" class="details" data-id="${product.id}">ver detalhes</a>
            </div>
        </div>`

    return catalogueCard
}

const loadingCatalogue = (products) => {
    const container = document.querySelector('#session')
    const cards = products.map(creatingCard)

    container.replaceChildren(...cards)
}

const createModal = (catalogueItem) => {
    const modalCard = document.createElement('div')
    modalCard.setAttribute('id', 'modal-container')
    modalCard.innerHTML = 
    `<div id="modal">
        <div class="modal-content">
            <div class="top">
                <div class="book-gender">
                    <button id="close-button">X</button>
                    <img src="${catalogueItem.image}">
                    <span>${catalogueItem.gender}</span>
                </div>
                <div class="book-info">
                    <span>${catalogueItem.title}</span>
                    <span>${catalogueItem.author}</span>
                    <p>${catalogueItem.description}</p>
                </div>
            </div>
            <div class="modal-line"></div>
            <div class="finish">
                <div class="freight-area">
                    <span>Calcular entrega</span>
                    <label>CEP</label>
                    <div class="input-cep">
                        <input type="search" class="search-cep" id="cep">
                        <button type="submit" id="calculate-cep">ok</button>
                    </div>
                    <div class="cep-results">
                        <span id="adress"></span>
                    </div>
                </div>
                <div class="prices">
                    <div class="subtotal">
                        <span>subtotal</span>
                        <div class="value">
                            <span>${catalogueItem.oldPrice}</span>
                        </div>
                    </div>
                    <div class="total">
                        <span>total</span>
                        <div class="value">
                            <span>${catalogueItem.newPrice}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`

    document.getElementById('modal-content').replaceChildren(modalCard)
    document.getElementById('close-button').addEventListener('click', closeModal)
    
    return modalCard
}

const modalGenerator = () => {
    document.getElementById('modal-container').classList.toggle('active')
}

const closeModal = () => {
    document.getElementById('modal-container').classList.remove('active')
}

loadingCatalogue(catalogueDb)

document.querySelectorAll('.details')
.forEach(details => details.addEventListener('click', function(event){
    event.preventDefault()
    let catalogueItem = catalogueDb.filter(item => {
        return item.id == event.target.dataset.id
    })[0]
    createModal(catalogueItem)
    modalGenerator()
}))





