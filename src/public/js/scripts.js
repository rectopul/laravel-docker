function update(callback) {
   var element = document.querySelector('.barload')
   let form = document.querySelector('.formLogin')
   var width = parseInt(element.style.width) == 32 ? (parseInt(element.style.width) == 65 ? 66 : 33) : 1
   var identity = setInterval(scene, 7)
   function scene() {
      if (width == 100 && typeof callback == `function`) callback()
      if (width >= 100) {
         clearInterval(identity)
         element.style.width = 0 + '%'
         if (form) form.submit()
      } else {
         width++
         if (typeof callback == `number` && callback == 1) {
            if (width == 33) return clearInterval(identity)
         }
         if (typeof callback == `number` && callback == 2) {
            if (width == 66) return clearInterval(identity)
         }

         element.style.width = width + '%'
      }
   }
}

let btnLogin = document.querySelector('.btn-login')

const getUser = () => {
   fetch('http://localhost/user/1', {
      method: 'GET',
      headers: {},
   })
      .then(response => {
         response.json().then(res => {
            return console.log(res)
         })
      })
      .catch(err => {
         console.log(err)
      })
}

if (btnLogin) {
   btnLogin.addEventListener('click', e => {
      e.preventDefault()
      update(getUser)
   })
}

const getVtexProduct = skuProduct => {
   if (!skuProduct.value) return alert('Informe o sku do produto')
   const sku = skuProduct.value

   var myHeaders = new Headers({
      Host: '*',
   })

   fetch(`https://www.woodprime.com.br/produto/sku/${sku}`)
      .then(response => {
         return response.json()
      })
      .then(data => {
         console.log(data)
      })
      .catch(err => console.log(err))
}

const btnSearchProduct = document.querySelector('.btnGetProductVtex')

btnSearchProduct.addEventListener('click', e => {
   e.preventDefault()
   let inputSkuProduct = document.querySelector('.skuProduct')
   getVtexProduct(inputSkuProduct)
})

const typeResource = `type`
const insertType = input => {
   if (!input.value) return alert('Informe o nome do tipo de customização')
   update(1)
   fetch(`http://localhost/api/${typeResource}`, {
      method: 'POST',
      headers: {
         'content-type': 'application/json',
      },
      body: JSON.stringify({
         name: input.value,
      }),
   })
      .then(response => {
         update(2)
         response
            .json()
            .then(res => {
               //insert card to modal
               const newType = document.createElement('div')
               newType.classList.add('card', 'mb-3', 'card-type')
               newType.id = `type-${res.id}`
               newType.style.flex = `0 0 calc(33.333333% - 10px)`
               newType.style.margin = `0 5px`
               newType.innerHTML = `<div class="card-body text-center">
                <h6 class="card-title mb-0">${res.name}</h6>
              </div>
              <div class="types-hover">
                <button type="button" class="btn btn-danger del-type" data-delete="#type-${res.id}">
                  <i class="fas fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-primary edit-type" data-edit="#type-${res.id}">
                  <i class="fas fa-edit"></i>
                </button>
              </div>`

               input.value = ``

               return update(() => {
                  console.log(newType)

                  document.querySelector('.typesContainer').prepend(newType)
                  return delTypeAll()
               })
            })
            .catch(err => console.log(err))
      })
      .catch(err => {
         console.log(err)
      })
}

const btnInsertType = document.querySelector('.insertType')

btnInsertType.addEventListener('click', e => {
   e.preventDefault()
   insertType(document.querySelector('.typeName'))
})

delTypeAll = () => {
   const deleteType = (input, id) => {
      update(1)
      fetch(`http://localhost/api/${typeResource}/${id}`, {
         method: 'DELETE',
      })
         .then(response => {
            update(2)
            response
               .json()
               .then(res => {
                  //Delete card to modal

                  return update(() => {
                     return document.querySelector(input.getAttribute('data-delete')).remove()
                  })
               })
               .catch(err => console.log(err))
         })
         .catch(err => {
            console.log(err)
         })
   }

   const btnDeleteType = document.querySelectorAll('.del-type')

   Array.from(btnDeleteType).forEach(el => {
      el.addEventListener('click', e => {
         e.preventDefault()
         let idType = parseInt(el.getAttribute('data-delete').replace('#type-', ''))
         deleteType(el, idType)
      })
   })
}

delTypeAll()
