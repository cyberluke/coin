<?php

namespace BitOasis\Coin\DI;

use BitOasis\Coin\Address\BitcoinAddress;
use BitOasis\Coin\Address\BitcoinCashAddress;
use BitOasis\Coin\Address\BitcoinTestnetAddress;
use BitOasis\Coin\Address\EthereumAddress;
use BitOasis\Coin\Address\LitecoinAddress;
use BitOasis\Coin\Address\MoneroAddress;
use BitOasis\Coin\Address\RippleAddress;
use BitOasis\Coin\Address\ZcashAddress;
use BitOasis\Coin\Cryptocurrency;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
final class DefaultCurrencyAddressTypes {

	const TYPES = [
		Cryptocurrency::BTC => BitcoinAddress::class,
		Cryptocurrency::TBTC => BitcoinTestnetAddress::class,
		Cryptocurrency::ETH => EthereumAddress::class,
		Cryptocurrency::XRP => RippleAddress::class,
		Cryptocurrency::LTC => LitecoinAddress::class,
		Cryptocurrency::BCH => BitcoinCashAddress::class,
		Cryptocurrency::ZEC => ZcashAddress::class,
		Cryptocurrency::XMR => MoneroAddress::class,
	];

}