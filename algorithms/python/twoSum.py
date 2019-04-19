class Solution:
    def twoSum(self, nums, target):
        temp = dict()
        for i, x in enumerate(nums):
            if target - x in temp:
                return [i, temp[target - x]]
            temp[x] = i