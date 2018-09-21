#   Collection

##  table list
-   tCollectionSession
-   tCollectionSessionStatus
-   tCollectionLevel
-   tCollectionInvoiceStatus
-   tCollectionInvoiceOpen
-   tCollectionInvoiceLog

##  tCollectionSession
-   nCollectionSessionId
-   nCollectionSessionStatusId
-   dCollection
-   sInfo

##  tCollectionSessionStatus
-   nCollectionSessionStatusId
-   sKey
-   sLabel
-   sInfo

##  tCollectionLevel
-   nCollectionLevelId
-   sKey
-   sLabel
-   sInfo

##  tCollectionInvoiceStatus (candidate, elected)
-   nCollectionInvoiceStatusId
-   sKey
-   sLabel
-   sInfo

##  tCollectionInvoiceOpen (import from Opo)
-   nCollectionInvoiceOpenId
-   nCollectionLevelId
-   nInvoiceCollectionStatusId
-   nAmtOpen

##  tCollectionInvoiceLog (log of collectionSession per InvoiceOpen)
-   nCollectionInvoiceLogId
-   nInvoiceOpenId
-   nCollectionLevelId
-   nAmtOpen

##  class list
-   cCollectionSessionModel (ext. cModel)
-   cCollectionSession
-   cCollectionSessionStatusModel (ext. cModelIdKey)
-   cCollectionSessionStatus
-   cCollectionLevelModel (ext. cModelIdKey)
-   cCollectionLevel
-   cCollectionInvoiceStatusModel (ext. cModelIdKey)
-   cCollectionInvoiceStatus
-   cCollectionInvoiceOpenModel (ext. cModel)
-   cCollectionInvoiceOpen
-   cCollectionInvoiceLogModel (ext. cModel)
-   cCollectionInvoiceLog
-   cDocReminder (ext. cDocFinance)
-   cOpoMergeProc
-   cCandidateListProc
-   cCandidatePromoteProc
-   cElectedDemoteProc
-   cSessionCreateProc
-   cReminderPdfCreateProc
