package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewContactEntityFunc func(client *IntercomSDK, entopts map[string]any) IntercomEntity

