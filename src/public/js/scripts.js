function update(callback) {
   var element = document.querySelector('.barload')
   let form = document.querySelector('.formLogin')
   var width = 1
   var identity = setInterval(scene, 7)
   function scene() {
      if (width == 1) callback()
      if (width >= 100) {
         clearInterval(identity)
         element.style.width = 0 + '%'
         form.submit()
      } else {
         width++
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
