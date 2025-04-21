def rod_cutting_recursive(prices, n):
    if n == 0:
        return 0
    max_profit = float('-inf')
    for i in range(1, n + 1):
        max_profit = max(max_profit, prices[i - 1] + rod_cutting_recursive(prices, n - i))
    return max_profit

prices = [3, 6, 9, 10]
n = len(prices)
print(rod_cutting_recursive(prices, n))