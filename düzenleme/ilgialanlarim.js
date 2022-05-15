const select = document.querySelector('.form select')
const grid = document.querySelector('.grid')

function showAll() {
    fetch('http://www.omdbapi.com/?i=tt3896198&apikey=47d2b748')
        .then((res) => res.json())
        .then((data) => {
            data.forEach(el => {
                var card = document.createElement('div')
                card.classList.add('card')
                
                var name = document.createElement('p')
                name.textContent = el.name
            })
        })
    }