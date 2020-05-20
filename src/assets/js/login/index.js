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
