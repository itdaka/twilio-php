<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class RoomOptions {
    /**
     * @param bool $enableTurn Use Twilio Network Traversal for TURN service.
     * @param string $type Type of room, either peer-to-peer, group-small or group.
     * @param string $uniqueName Name of the Room.
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every room event.
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @param int $maxParticipants Maximum number of Participants in the Room.
     * @param bool $recordParticipantsOnConnect Start Participant recording when
     *                                          connected.
     * @param string $videoCodecs An array of video codecs supported when
     *                            publishing a Track in the Room.
     * @param string $mediaRegion Region for the media server in Group Rooms.
     * @return CreateRoomOptions Options builder
     */
    public static function create($enableTurn = Values::NONE, $type = Values::NONE, $uniqueName = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $maxParticipants = Values::NONE, $recordParticipantsOnConnect = Values::NONE, $videoCodecs = Values::NONE, $mediaRegion = Values::NONE) {
        return new CreateRoomOptions($enableTurn, $type, $uniqueName, $statusCallback, $statusCallbackMethod, $maxParticipants, $recordParticipantsOnConnect, $videoCodecs, $mediaRegion);
    }

    /**
     * @param string $status Only show Rooms with the given status.
     * @param string $uniqueName Only show Rooms with the provided Name.
     * @param \DateTime $dateCreatedAfter Only show Rooms that started on or after
     *                                    this date, given as YYYY-MM-DD.
     * @param \DateTime $dateCreatedBefore Only show Rooms that started before this
     *                                     date, given as YYYY-MM-DD.
     * @return ReadRoomOptions Options builder
     */
    public static function read($status = Values::NONE, $uniqueName = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE) {
        return new ReadRoomOptions($status, $uniqueName, $dateCreatedAfter, $dateCreatedBefore);
    }
}

class CreateRoomOptions extends Options {
    /**
     * @param bool $enableTurn Use Twilio Network Traversal for TURN service.
     * @param string $type Type of room, either peer-to-peer, group-small or group.
     * @param string $uniqueName Name of the Room.
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every room event.
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @param int $maxParticipants Maximum number of Participants in the Room.
     * @param bool $recordParticipantsOnConnect Start Participant recording when
     *                                          connected.
     * @param string $videoCodecs An array of video codecs supported when
     *                            publishing a Track in the Room.
     * @param string $mediaRegion Region for the media server in Group Rooms.
     */
    public function __construct($enableTurn = Values::NONE, $type = Values::NONE, $uniqueName = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $maxParticipants = Values::NONE, $recordParticipantsOnConnect = Values::NONE, $videoCodecs = Values::NONE, $mediaRegion = Values::NONE) {
        $this->options['enableTurn'] = $enableTurn;
        $this->options['type'] = $type;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['maxParticipants'] = $maxParticipants;
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
        $this->options['videoCodecs'] = $videoCodecs;
        $this->options['mediaRegion'] = $mediaRegion;
    }

    /**
     * Deprecated.  Enable [Twilio's Network Traversal TURN service](https://www.twilio.com/stun-turn). TURN service is used when direct peer-to-peer media connections cannot be established due to firewall restrictions. This setting only applies to Rooms with type `peer-to-peer`.
     *
     * @param bool $enableTurn Use Twilio Network Traversal for TURN service.
     * @return $this Fluent Builder
     */
    public function setEnableTurn($enableTurn) {
        $this->options['enableTurn'] = $enableTurn;
        return $this;
    }

    /**
     * Type of room, either `peer-to-peer`, `group-small` or `group`. Will be `group` by default.
     *
     * @param string $type Type of room, either peer-to-peer, group-small or group.
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * Name of the Room.  This is unique for `in-progress` rooms. If not provided, Room name will be set to the Room Sid.
     *
     * @param string $uniqueName Name of the Room.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * A URL that Twilio sends asynchronous webhook requests to on every room event. If not provided, status callback events will not be dispatched.
     *
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every room event.
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * HTTP method Twilio should use when requesting the above URL. Defaults to `POST`.
     *
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Maximum number of Participants in the Room. Peer-to-peer rooms can have a maximum of 10 Participants. Small Group rooms can have a max of 4 Participants. Group rooms can have a max of 50 Participants
     *
     * @param int $maxParticipants Maximum number of Participants in the Room.
     * @return $this Fluent Builder
     */
    public function setMaxParticipants($maxParticipants) {
        $this->options['maxParticipants'] = $maxParticipants;
        return $this;
    }

    /**
     * Start Participant recording when connected. ***This feature is not available in `peer-to-peer` rooms.***
     *
     * @param bool $recordParticipantsOnConnect Start Participant recording when
     *                                          connected.
     * @return $this Fluent Builder
     */
    public function setRecordParticipantsOnConnect($recordParticipantsOnConnect) {
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
        return $this;
    }

    /**
     * An array of video codecs supported when publishing a Track in the Room.  `VP8` and `H264` codecs are supported.  ***This feature is not available in `peer-to-peer` rooms***
     *
     * @param string $videoCodecs An array of video codecs supported when
     *                            publishing a Track in the Room.
     * @return $this Fluent Builder
     */
    public function setVideoCodecs($videoCodecs) {
        $this->options['videoCodecs'] = $videoCodecs;
        return $this;
    }

    /**
     * Region for the media server in Group Rooms.  Default region is `us1`.  See the list of [available Media Regions.](https://www.twilio.com/docs/api/video/ip-address-whitelisting#group-rooms-media-servers)***This feature is not available in `peer-to-peer` rooms.***
     *
     * @param string $mediaRegion Region for the media server in Group Rooms.
     * @return $this Fluent Builder
     */
    public function setMediaRegion($mediaRegion) {
        $this->options['mediaRegion'] = $mediaRegion;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.CreateRoomOptions ' . implode(' ', $options) . ']';
    }
}

class ReadRoomOptions extends Options {
    /**
     * @param string $status Only show Rooms with the given status.
     * @param string $uniqueName Only show Rooms with the provided Name.
     * @param \DateTime $dateCreatedAfter Only show Rooms that started on or after
     *                                    this date, given as YYYY-MM-DD.
     * @param \DateTime $dateCreatedBefore Only show Rooms that started before this
     *                                     date, given as YYYY-MM-DD.
     */
    public function __construct($status = Values::NONE, $uniqueName = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
    }

    /**
     * Only show Rooms with the given status: `in-progress` (default), or `completed`
     *
     * @param string $status Only show Rooms with the given status.
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Only show Rooms with the provided Name.
     *
     * @param string $uniqueName Only show Rooms with the provided Name.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * Only show Rooms that started on or after this date, given as `YYYY-MM-DD`.
     *
     * @param \DateTime $dateCreatedAfter Only show Rooms that started on or after
     *                                    this date, given as YYYY-MM-DD.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Only show Rooms that started before this date, given as `YYYY-MM-DD`.
     *
     * @param \DateTime $dateCreatedBefore Only show Rooms that started before this
     *                                     date, given as YYYY-MM-DD.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.ReadRoomOptions ' . implode(' ', $options) . ']';
    }
}