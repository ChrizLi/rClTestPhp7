<html>
<head>
    <?  php
        $oApp = new CCbDocMailContainer();
    ?>
</head>
<body>
    <?  php
        
        //prep everything
        $oPayoutType            = new CPayoutType('Mps');
        $oPayoutSession         = new CPayoutSession($oPayoutType);
        $oMailSession           = new CPayoutMailSession($oPayoutSession);
        
        // pre credit note
        $oFileTypeCreditNote    = new CFileType('creditNote');
        $oFileTypeCreditNoteToSession   = new CFileTypeToSession($oMailSession, $oFileTypeCreditNote);
        
        // loop through creditNote doc creation
        loop {
            $oPayoutFileLog     = new CPayoutFileLog($oMailSession, $oFileTypeCreditNoteToSession)
        }        
        
        // pre invoice
        $oFileTypeInvoice       = new CFileType('invoice');
        $oFileTypeInvoiceToSession      = new CFileTypeToSession($oMailSession, $oFileTypeInvoice);
        
        // loop through invoice doc creation
        loop {
            $oPayoutFileLog     = new CPayoutFileLog($oMailSession, $oFileTypeInvoiceToSession)
        }
        
                //send mail to confirmation point
        $oCbMailType            = new CCbMailType('confirm');
        $oCbMail                = new CCbMail($oMailSession, $oCbMailType);

        //end of doc creation and logging
        
        //show confirmation list
        $oPayoutMailSession = new CPayoutMailSession();
        $oPayoutMailSession->CandidateShow($oPageRx);
        
        //receive confirmation
        $oPayoutMailSend        = new CPayoutMail($oPageRx);
            loop {
                $this-oFile-fnFileMove($sSource, $sTarget);
                if Email $this->oPayoutMailSend($nCurrentId);
                $this->oPayoutFileLog->fnSet('sent');
            }
            $this->oPayoutMailSession->fnUpd('closed');
            
        // show all sessions open/closed
        $oPayoutMailSession = new CPayoutMailSession();
        $oPayoutMailSession->CandidateShow($oPageRx);
    ?>
</body>
</html>
