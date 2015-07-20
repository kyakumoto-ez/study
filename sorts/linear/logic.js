function moreThan(x, y) {
  return (x < y);
}

function lessThan(x, y) {
  return (y < x);
}

function linearSort(predicate) {
  return function(list) {
    var copy      = list.concat(),
        listCount = list.length,
        point     = 0,
        swap      = copy[point];

    while (point < listCount) {
      for (var i = point + 1; i < listCount; i++) {
        if (predicate(copy[point], copy[i])) {
          swap        = copy[point];
          copy[point] = copy[i];
          copy[i]     = swap;
        }
      }
      point++;
    }

    return copy;
  };
}

var asc  = linearSort(lessThan);
var desc = linearSort(moreThan);


asc([1, 10, 8, 6, 7, 3, 5, 4, 2, 9]);
desc([1, 10, 8, 6, 7, 3, 5, 4, 2, 9]);
