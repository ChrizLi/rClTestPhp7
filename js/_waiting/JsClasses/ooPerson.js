function cPerson(){
}

cPerson.prototype.sayHello = function(){
    console.log("Hello, Im " + this.sFirstname);
}

cPerson.prototype.setFirstname = function(sFirstname){
    var this.sFirstname = sFirstname;
}

cPerson.prototype.getFirstname = function(){
    return this.sFirstname;
}
