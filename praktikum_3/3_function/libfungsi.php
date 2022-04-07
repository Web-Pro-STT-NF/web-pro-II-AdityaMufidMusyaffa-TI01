<?php
function kelulusan($_nilai)
{
  if ($_nilai > 55) {
    return 'LULUS';
  } else {
    return 'TIDAK LULUS';
  }
}
?>