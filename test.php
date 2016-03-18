<?php
/**
 *  测试文件--记录一些项目会用到的代码片段，并进行测试
 *  Author: Luo Ning <luoning@luoning.me>
 *  Date: 2016/3/18 20:33
 *  The code for static-blog.
 */

/**
 *  使用生成器高效迭代处理大型数据集
 *  @param String $filename
 *  @return Iterator
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

/**
 *  根据文件读取的每行，确定一篇文章的一些元数据 meta
 *  $param Iterator $file
 *  @return Array
 */
function getAttrArr(Iterator $file)
{
	$line_num = 0;
	$attr_arr = [];
	foreach($file as $line) {
	    $line_num++;
	    // echo $line_num;
		if ($line_num > 1 && trim($line) == '---') {
			break;
		}
		// echo $line;

		if ($line_num > 1) {

			$temp = explode(':', trim($line));

			$attr_str = trim($temp[1]);

			if (count($temp) > 2) {
				
				foreach ($temp as $k => $v) {
					if ($k < 2) 
						continue;

					$attr_str .= ':' . $v;
				}

			}
			$attr_arr[$temp[0]] = $attr_str;
		}
	}

	return $attr_arr;
}

//Test to use

$file = FileLineGenerator('post.md');

$attr_arr = getAttrArr($file);

print_r($attr_arr);