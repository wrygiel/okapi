<?

namespace okapi;

# This is the list of OKAPI views. Regexps are mapped to namespaces.
# Each namespace should expose the Webservice class with a method "call".
# The "call" method should take OkapiRequest and return OkapiResponse,
# or throw a BadRequest exception.

class OkapiUrls
{
	public static $mapping = array(
		'^(services/.*)\.html$' => 'method_doc',
		'^(services/.*)$' => 'method_call',
		'^introduction\.html$' => 'introduction',
		'^signup\.html$' => 'signup',
		'^examples\.html$' => 'examples',
		'^$' => 'index',
		'^apps/$' => 'apps/index',
		'^apps/authorize$' => 'apps/authorize',
		'^apps/authorized$' => 'apps/authorized',
		'^apps/revoke_access$' => 'apps/revoke_access',
		'^update/?$' => 'update',
		'^attrlist$' => 'attrlist',
	);
}