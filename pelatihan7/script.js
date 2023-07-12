document.getElementById('order-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    var menuSelect = document.getElementById('menu-select');
    var quantityInput = document.getElementById('quantity-input');
    var totalCostElement = document.getElementById('total-cost');
  
    var selectedMenu = menuSelect.value;
    var quantity = parseInt(quantityInput.value);
  
    var menuCost = 0;
    switch (selectedMenu) {
      case 'burger':
        menuCost = 10;
        break;
      case 'pizza':
        menuCost = 15;
        break;
      case 'pasta':
        menuCost = 12;
        break;
      case 'salad':
        menuCost =       menuCost = 8;
        break;
      default:
        menuCost = 0;
        break;
    }
  
    var totalCost = menuCost * quantity;
    totalCostElement.textContent = '$' + totalCost;
  });
  
  