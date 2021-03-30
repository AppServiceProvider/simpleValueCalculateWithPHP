### javascript Alert 
```
        function validateForm() {
            var x = document.forms["myForm"]["first_number"].value;
            if (x == "" || x == null) {
                alert("Name must be filled out");
                return false;
            }
        }

```
### call function & name
- ``` name="myForm" ```
- ``` onsubmit="return validateForm()" ```
