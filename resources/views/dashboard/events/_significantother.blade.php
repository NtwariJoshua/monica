<div class="event-icon">
  <img src="/img/dashboard/significantother_{{ $event['nature_of_operation'] }}.png">
</div>

<div class="event-description">
  <a href="/people/{{ $event['contact_id'] }}">{{ $event['contact_complete_name'] }}</a>:

  {{ trans('dashboard.event_'.$event['nature_of_operation'].'_'.$event['object_type'], ['name' => $event['object']->first_name]) }}
</div>
