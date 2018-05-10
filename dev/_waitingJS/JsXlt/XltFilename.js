// 20xxxxxxv1.0, ListlChr, init
// 20160524v1.1, ListlChr, add more replacement chars
// 20160526v1.2, ListlChr, add drop SpecialChars from left
// this is for Draft to Editorial Filename 
// cleanup first line to not contain
// [forward slash\, backward slash, brackets, dot, hashtag]

// drop SpecialChars at beginning of string
var sFilename=getClipboard().replace(/^[\s\uFEFF\xA0\\/().#]*/,'');

// replace SpecialChars with underscore
//var sFilename=getClipboard().replace(/[\s\uFEFF\xA0\\/().#]/g,'_');
var sFilename=sFilename.replace(/[\s\uFEFF\xA0\\/().#]/g,'_');

// define a drafts app usable variable
draft.defineTag("filename", sFilename);
