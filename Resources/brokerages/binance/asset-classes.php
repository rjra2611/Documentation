<p><?= $writingAlgorithms ? "The Binance brokerage models support" : "Our Binance integration supports"?> trading <a href='/docs/v2/writing-algorithms/securities/asset-classes/crypto'>Crypto</a> and <a href='/docs/v2/writing-algorithms/securities/asset-classes/crypto-futures'>Crypto Futures</a>.</p>

<?php if ($cloudPlatform) { ?>
<div class="section-example-container">
    <pre class="csharp">AddCrypto("BTCUSDT", Resolution.Minute, Market.Binance);
AddCryptoFuture("BTCUSD", Resolution.Minute, Market.Binance);
AddCrypto("BTCUSDT", Resolution.Minute, Market.BinanceUS);</pre>
    <pre class="python">self.AddCrypto("BTCUSDT", Resolution.Minute, Market.Binance)
self.AddCryptoFuture("BTCUSD", Resolution.Minute, Market.Binance)</pre>
</div>
<?php } ?>

<p><?= $writingAlgorithms ? "The Binance US brokerage model" : "Our Binance US integration" ?> supports trading <a href='/docs/v2/writing-algorithms/securities/asset-classes/crypto'>Crypto</a>.</p>

<?php if ($cloudPlatform) { ?>
<div class="section-example-container">
    <pre class="csharp">AddCrypto("BTCUSDT", Resolution.Minute, Market.BinanceUS);</pre>
    <pre class="python">self.AddCrypto("BTCUSDT", Resolution.Minute, Market.BinanceUS)</pre>
</div>
<?php } ?>