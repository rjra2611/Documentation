<li>Get the "Strategy Equity", "Drawdown", and "Benchmark" <code>Chart</code> objects.</li>
<div class="section-example-container">
    <pre class="python">equity_chart = <?=$isLive ? "results" : "backtest"?>.Charts["Strategy Equity"]
drawdown_chart = <?=$isLive ? "results" : "backtest"?>.Charts["Drawdown"]
benchmark_chart = <?=$isLive ? "results" : "backtest"?>.Charts["Benchmark"]</pre>
</div>

<li>Get the "Equity", "Equity Drawdown", and "Benchmark" <code>Series</code> from the preceding charts.</li>
<div class="section-example-container">
    <pre class="python">equity = equity_chart.Series["Equity"].Values
drawdown = drawdown_chart.Series["Equity Drawdown"].Values
benchmark = benchmark_chart.Series["Benchmark"].Values</pre>
</div>

<li>Create a <code>pandas.DataFrame</code> from the series values.</li>
<div class="section-example-container">
    <pre class="python">df = pd.DataFrame({
    "Equity": pd.Series({datetime.fromtimestamp(value.x): value.y for value in equity}),
    "Drawdown": pd.Series({datetime.fromtimestamp(value.x): value.y for value in drawdown}),
    "Benchmark": pd.Series({datetime.fromtimestamp(value.x): value.y for value in benchmark})
}).ffill()</pre>
</div>

<li>Plot the performance chart.</li>
<div class="section-example-container">
    <pre class="python"># Create subplots to plot series on same/different plots
fig, ax = plt.subplots(2, 1, figsize=(12, 12), sharex=True, gridspec_kw={'height_ratios': [2, 1]})

# Plot the equity curve
ax[0].plot(df.index, df["Equity"])
ax[0].set_title("Strategy Equity Curve")
ax[0].set_ylabel("Portfolio Value ($)")

# Plot the benchmark on the same plot, scale by using another y-axis
ax2 = ax[0].twinx()
ax2.plot(df.index, df["Benchmark"], color="grey")
ax2.set_ylabel("Benchmark Price ($)", color="grey")

# Plot the drawdown on another plot
ax[1].plot(df.index, df["Drawdown"], color="red")
ax[1].set_title("Drawdown")
ax[1].set_xlabel("Time")
ax[1].set_ylabel("%")</pre>
</div>
<img class='docs-image' src="https://cdn.quantconnect.com/i/tu/api-result-plot.png" alt="api-equity-curve">