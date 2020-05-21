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
