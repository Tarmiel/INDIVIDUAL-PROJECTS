function populateUfs(){
    const ufSelect = document.querySelector("select[name=uf]")

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
    .then( res => res.json())
    .then( states => {
        // populando o select
        for(state of states){
            ufSelect.innerHTML += `<option value="${state.id}">${state.nome}</option>`
        }
    })
}
populateUfs()

function getCities(event){
    const citySelect = document.querySelector("[name=city]")
    const stateInput = document.querySelector("[name=state]")
    
    const ufValue = event.target.value

    const indexOfSelectState = event.target.selectedIndex
    stateInput.value = event.target.options[indexOfSelectState].text

    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`


    citySelect.innerHTML = "<option value>Selecione a cidade</option>"
    citySelect.disabled = true


    fetch(url)
    .then( res => res.json())
    .then( cities => {
        // populando o select
        for(city of cities){
            citySelect.innerHTML += `<option value="${city.id}">${city.nome}</option>`
        }
        citySelect.disabled = false
    })
}
// quando houver uma mudança no select UF chame a função getCities
document
    .querySelector("select[name=uf]")
    .addEventListener("change",getCities)


// Itens de coleta
const itemsToCollect = document.querySelectorAll(".items-grid li")
for(item of itemsToCollect){
    item.addEventListener("click",handleSelectedItem)
}
function handleSelectedItem(event){
    const itemLi = event.target
    // adicionar ou remover uma classe com js
    itemLi.classList.toggle("selected")


    const itemId = itemLi.dataset.id
}