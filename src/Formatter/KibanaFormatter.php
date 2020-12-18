<?php declare(strict_types=1);

namespace Elklog\Formatter;

use Monolog\Formatter\ElasticsearchFormatter;

/**
 * Format a log message into an Elasticsearch record  for kibana logs
 *
 * @author Pavel Marachkov
 */
class KibanaFormatter extends ElasticsearchFormatter
{
	/**
	 * @param string $index Elasticsearch index name
	 * @param string $type  Elasticsearch record type
	 */
	public function __construct(string $index, string $type)
	{
		parent::__construct($index, $type);
	}

	/**
	 * {@inheritdoc}
	 */
	public function format(array $record)
	{
		$record = parent::format($record);

		return $this->getDocument($record);
	}

	/**
	 * Convert a log message into an Elasticsearch record for kibana logs
	 *
	 * @param  array $record Log message
	 * @return array
	 */
	protected function getDocument(array $record): array
	{
		$record['@timestamp'] = $record['datetime'];

		return $record;
	}
}