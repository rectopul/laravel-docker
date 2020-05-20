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
