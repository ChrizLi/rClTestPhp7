var fnQueryToObject = function(q) {
  var col, 
    iLoopOuter, 
    r, 
    _iLoopInner, 
    _len, 
    nRowCount, 
    nColCount, 
    _results;
    
  _results = [];
  for (iLoopOuter = 0, nRowCount = q.ROWCOUNT; 
        0 <= nRowCount ? iLoopOuter < nRowCount : iLoopOuter > nRowCount;
        0 <= nRowCount ? iLoopOuter++ :iLoopOuter--) 
  {
    r = {};
    nColCount = q.COLUMNS;
    for (_iLoopInner = 0, _len = nColCount.length; 
         _iLoopInner < _len; 
         _iLoopInner++) 
    {
      col = nColCount[_iLoopInner];
      r[col.toLowerCase()] = q.DATA[col][iLoop];
    }
    _results.push(r);
  }
  return _results;
};