<?hh

<<__EntryPoint>> function main_mkdir_recursive(): void {
  $dirName = getenv('HPHP_TEST_TMPDIR') . 'mkdirRecursive';
  @rmdir($dirName);
  mkdir($dirName, 777);
  var_dump(@mkdir($dirName, 777, true));
  rmdir($dirName);
}
