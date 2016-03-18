<?php


/**
 *  使用生成器高效迭代处理大型数据集
 * @
 */
function FileLineGenerator($file) {
    if(!$fh = fopen($file, 'r')) {
        return false;
    }
    while(false !== ($line = fgets($fh))) {
        yield $line;
    }
    fclose($fh);
}