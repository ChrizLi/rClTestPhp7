#   CStage

##  requirements
-   staging (dev, test, prod)
-   default staging
-   noDb mode (read file)

##  noDb mode
-   if oDns===null then fnReadFile()
-   fnReadFile/db merge with default values (default stageSetName)
-   fnFileWrite() every timeSpanAtLeast
-   fnFileMetaGet() dLastAccessed

