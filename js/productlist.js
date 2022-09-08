/**
 * Access the form element
 */
const productListForm = document.getElementsByTagName('form')[0]
 
/**
 * Check if any checkbox is selected
 * and prevent submitting if no checkbox is selected
 */
productListForm.addEventListener('submit', (e) => {
  const checkedBoxes = document.querySelectorAll('.delete-checkbox:checked')

  checkedBoxes.length === 0 ? e.preventDefault() : true
})
 
/**
 * Get all sku values and push it inside an array
 * then store the array in the local storage
 */
var skuValues = []
var skuElements = document.getElementsByClassName('sku')
for (let i = 0; i < skuElements.length; i++) {
  skuValues.push(skuElements[i].textContent)
}

localStorage.setItem('skuValues', JSON.stringify(skuValues))
