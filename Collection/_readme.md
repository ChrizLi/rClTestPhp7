#   Collection

##  table list
-   tCollectionSession
-   tCollectionSessionStatus
-   tCollectionLevel
-   tCollectionInvoiceStatus
-   tCollectionInvoiceOpen
-   tCollectionInvoiceLog

##  tCollectionSession
holds collection dates (print session)
-   nCollectionSessionId
-   nCollectionSessionStatusId
-   dCollection
-   sInfo

##  tCollectionSessionStatus
holds status of sessions (waiting, printing, closed)
-   nCollectionSessionStatusId
-   sKey
-   sLabel
-   sInfo

##  tCollectionLevel
holds collection level (1,2,3,4)
-   nCollectionLevelId
-   sKey
-   sLabel
-   sInfo

##  tCollectionInvoiceStatus
- holds status of each invoice (candidate, elected, rejected)
-   nCollectionInvoiceStatusId
-   sKey
-   sLabel
-   sInfo

##  tCollectionInvoiceOpen (import from Opo)
- holds invoices with open amounts (to be collected)
-   nCollectionInvoiceOpenId
-   nCollectionLevelId
-   nInvoiceCollectionStatusId
-   nAmtOpen

##  tCollectionInvoiceLog
- log of all reminders based on CollectionSession
-   nCollectionInvoiceLogId
-   nInvoiceOpenId
-   nCollectionSessionId
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
