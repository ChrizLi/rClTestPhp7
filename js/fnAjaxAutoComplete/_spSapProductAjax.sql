create proc dbo._spSapProductAjax
(
    @sSearch    varchar(64) = ''
)
as
begin
    select  sProductId,
            sProductDesc
    from    dbo.vwSAP_ArtikelStamm
    where   sProductDesc is not null
    and     sProductId like @sSearch + '%'
end;
