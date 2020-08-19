/**
 * Populando os UF.
 */
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


/**
 * Função para "pegar" as cidades.
 */
function getCities(event) {
    const citySelect = document.querySelector("[name=city]")
    const stateInput = document.querySelector("[name=state]")

    const ufValue = event.target.value

    const indexOfSelectedState = event.target.selectedIndex
    stateInput.value = event.target.options[indexOfSelectedState].text


    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`


    citySelect.innerHTML = "<option value>Selecione a Cidade</option>"
    citySelect.disabled = true

    fetch(url)
    .then( res => res.json() )
    .then( cities => {
        

        for( const city of cities ) {
            citySelect.innerHTML += `<option value="${city.nome}">${city.nome}</option>`
        }

        citySelect.disabled = false
    } )
}


// ouvidor de eventos
// quando houver uma mudança no select UF chame a função getCities
document
    .querySelector("select[name=uf]")
    .addEventListener("change",getCities)



/**
 * Itens de coleta
 */
const itemsToCollect = document.querySelectorAll(".items-grid li")
for(item of itemsToCollect){
    item.addEventListener("click",handleSelectedItem)
}


const collectedItems = document.querySelector("input[name=items]")
let selectedItems = []


function handleSelectedItem(event){
    const itemLi = event.target
    // adicionar ou remover uma classe com js usando toggle
    itemLi.classList.toggle("selected")

    //pega os numeros do ID
    const itemId = itemLi.dataset.id
    console.log('itemId',itemId)
    
    // verificar se existem itens selecionados,se set
    // pegar os itens selecionados
    const alreadySelected = selectedItems.findIndex(item =>{
         const itemFound = item == itemId
         return itemFound //return true or false
        // ou
        // return item == itemId
    })

    // se já estiver selecionado
    if(alreadySelected >=0){
        // tirar da seleção
        const filteredItems = selectedItems.filter(item =>{
            const itemIsDiff = item != itemId
            return itemIsDiff
        })
        selectedItems = filteredItems
    }else{
        // se não estiver selecionado , adicionar a seleção
        selectedItems.push(itemId)
        console.log(selectedItems)
    }   

    console.log('selectedItems', selectedItems)
    // atualizar o campo escondido com os itens selecionados
    collectedItems.value = selectedItems
}
