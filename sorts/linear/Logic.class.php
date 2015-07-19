<?php

class Logic
{
  public function asc($list) {
    return $this->_sort($list, count($list), 0);
  }

  public function desc($list) {
    return $this->_sort($list, count($list), 0, true);
  }

  private function _sort($list, $listCount, $point, $isDesc = false) {
    if ($listCount <= $point) {
      return $list;
    }

    $result = $list;
    $value  = $list[$point];
    for ($index = $point + 1; $index < $listCount; $index++) {
      // 昇順
      if ($isDesc === false && $list[$index] < $value) {
        $result[$point] = $list[$index];
        $result[$index] = $value;
        $value          = $list[$index];
      }

      // 降順
      else if ($isDesc === true && $value < $list[$index]) {
        $result[$point] = $list[$index];
        $result[$index] = $value;
        $value          = $list[$index];
      }
    }

    return $this->_sort($result, $listCount, ++$point, $isDesc);
  }
}
