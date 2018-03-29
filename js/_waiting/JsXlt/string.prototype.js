function string.prototype.left(s,n)
{
    // left,len-1
    // left('12345',3)=>'123'
    return(s.slice(0,n-1));
}

function string.prototype.right(s,n)
{
    // right,
    // right('12345',3)=>'345'
    return(s.slice(s.length-n));
}

if (!String.prototype.trim) {
  String.prototype.trim = function () {
    return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
  };
}

if (!String.prototype.ltrim)
{
    string.prototype.ltrim=function()
    {   //whitespace,char(32)
        //zero width, no break space=\uFEFF
        //no break space=\xA0
        return this.replace(/^[\s\uFEFF\xA0]*/,'');
    }
}

if (!String.prototype.rtrim)
{
    string.prototype.rtrim=function()
    {   //see prototype.ltrim for details
        return this.replace(/[\s\uFEFF\xA0]*$,'');
    }
}
