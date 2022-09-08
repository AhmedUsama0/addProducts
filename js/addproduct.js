/**
 * Get Access to elements
 */
 const form = document.getElementById('product_form')

 const sku = document.getElementById('sku')
 
 const name1 = document.getElementById('name')
 
 const price = document.getElementById('price')
 
 const productType = document.getElementById('productType')
 
 const size = document.getElementById('size')
 
 const weight = document.getElementById('weight')
 
 const height = document.getElementById('height')
 
 const width = document.getElementById('width')
 
 const length = document.getElementById('length')
 
 const error = document.getElementById('error')
 
 const typeError = document.getElementById('typeError')
 
 const uniqueSKU = document.getElementById('uniqueSKU')
 
 const sizeAtrr = document.getElementsByClassName('sizeAtrr')[0]
 
 const weightAtrr = document.getElementsByClassName('weightAtrr')[0]
 
 const heightAtrr = document.getElementsByClassName('heightAtrr')[0]
 
 const widthAtrr = document.getElementsByClassName('widthAtrr')[0]
 
 const lengthAtrr = document.getElementsByClassName('lengthAtrr')[0]
 
 const description = document.getElementById('description')
 
 /**
  * function to get the type selected
  * by user and display the related input fields
  */
 function getType() {
   if (productType.value === 'DVD') { 
     sizeAtrr.removeAttribute('hidden')
     size.style.display = 'block'
 
     weightAtrr.hidden = 'false'
     weight.style.display = 'none'
     weight.value = ''
 
     heightAtrr.hidden = 'false'
     height.style.display = 'none'
     height.value = ''
 
     widthAtrr.hidden = 'false'
     width.style.display = 'none'
     width.value = ''
 
     lengthAtrr.hidden = 'false'
     length.style.display = 'none'
     length.value = ''
 
     description.textContent = 'Please, provide size in MB.'
   } else if (productType.value === 'Book') {
     weightAtrr.removeAttribute('hidden')
     weight.style.display = 'block'
 
     sizeAtrr.hidden = 'false'
     size.style.display = 'none'
     size.value = ''
 
     heightAtrr.hidden = 'false'
     height.style.display = 'none'
     height.value = ''
 
     widthAtrr.hidden = 'false'
     width.style.display = 'none'
     width.value = ''
 
     lengthAtrr.hidden = 'false'
     length.style.display = 'none'
     length.value = ''
 
     description.textContent = 'Please, provide weight in KG.'
   } else if (productType.value === 'Furniture') {
     heightAtrr.removeAttribute('hidden')
     height.style.display = 'block'
 
     widthAtrr.removeAttribute('hidden')
     width.style.display = 'block'
 
     lengthAtrr.removeAttribute('hidden')
     length.style.display = 'block'
 
     weightAtrr.hidden = 'false'
     weight.style.display = 'none'
     weight.value = ''
 
     sizeAtrr.hidden = 'false'
     size.style.display = 'none'
     size.value = ''
 
     description.textContent = 'Please, provide dimensions in HxWxL format.'
   }
 }
 
 /**
  * Perform the necessary validations to the form
  */
 form.addEventListener('submit', (e) => {
   const regEx = /[~`!@#$%\^&*()+=\[\]';,/{}|\\":<>\?]/g
   uniqueSKU.textContent = '';
   typeError.textContent = '';
   error.textContent = '';
 
   /**
    * Make sure the fields are not empty
    */
   if (
     sku.value !== '' &&
     name1.value !== '' &&
     price.value !== '' &&
     productType.value !== '' &&
     (size.value !== '' ||
       weight.value !== '' ||
       (height.value !== '' && width.value !== '' && length.value !== ''))
   ) {
     /**
      * Make sure the SKU is unique
      */
     for (i = 0; i < localStorage.getItem('skuValues').length; i++) {
       if (sku.value === JSON.parse(localStorage.getItem('skuValues'))[i]) {
         e.preventDefault()
         uniqueSKU.textContent = 'SKU is already exist.'
       }
     }
 
     /**
      * Allow a specific type of data for each input field
      */
     if (
       (/[0-9]/.test(sku.value) === true && /[A-z]/.test(sku.value) === false) ||
       regEx.test(sku.value) === true ||
       regEx.test(name1.value) === true ||
       (/[0-9]/.test(name1.value) === true &&
         /[A-z]/.test(name1.value) === false)
     ) {
       e.preventDefault()
       typeError.textContent = 'Please, provide the data of indicated type.'
     }
   } else {
     e.preventDefault()
     error.textContent = 'Please, submit required data.'
   }
 })
 