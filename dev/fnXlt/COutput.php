class COutput
{
    function fnConstructor
    {
        // define global vars
        $sUrl = ""; 
    }

    public static function FnUrlRedirectSet($sUrl)
    {
        // header('Location: $sUrl');
        $sUrl = $sUrl;
    }
    
    public static function FnBodyGet()
    {
        
    }
    
    public static function FnBodyAllGet()
    {
        private $sOut ="";
        if (len(FnUrlRedirectGet()!== "")
        {
            $sOut += FnUrlRedirectGet();
        }
        else
        {
            $sOut += FnNoteHtmlGet("Info");
            $sOut += FnNoteHtmlGet("Error");
            $sOut += FnBodyGet();
        }
        return $sOut;
    }
}