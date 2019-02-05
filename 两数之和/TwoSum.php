<?-
class Solution {
    function twoSum($nums, $target) {
        $temp_nums = $nums;
        sort($nums);
        $left = 0;
        $right = count($nums) - 1;
        while($left < $right){
            if($nums[$left] + $nums[$right] < $target){
                $left++;
            }elseif($nums[$left] + $nums[$right] > $target){
                $right--;
            }else{
                $l = array_search($nums[$left], $temp_nums);
                $temp_nums = array_reverse($temp_nums, true);
                $r = array_search($nums[$right], $temp_nums);
                return array($l, $r);
            }
        }
    }
}