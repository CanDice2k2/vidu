function Validator(options){
    var formElement = document.querySelector(options.form);
    console.log(options)
    if (formElement){
        options.rules.forEach(function(rule){
            // var inputElement = formElement.querySelector(rule.selector);
            // if (inputElement){
            //     inputElement.onblur = function(){
            //         var errorMessage = rule.test(inputElement.value);
            //         console.log(errorMessage);
            //     }
            // }
            console.log(rules.selector);
        });
    }
}

Validator.isRequired = function(input){
    // return{
    //     selector: selector,
    //     test: function(){
            
    //     }
    // }
}

Validator.isEmail = function(input){
    // return input.includes('@');
}