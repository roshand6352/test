<?php

namespace App\Helpers;


class AdminDataTableButtonHelper
{
    public static function actionButtonDropdown2($array): string
    {
        $action_button_dropdown = '<div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">';
        foreach ($array['actions'] as $key => $value) {
            if ((string)$key === 'edit') {
                $action_button_dropdown .= '<li><a class="dropdown-item edit-item-btn" href="' . $value . '" ><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a></li>';
            } else if ((string)$key === 'view-page') {
                $action_button_dropdown .= '<li><a class="dropdown-item detail-page-button" href="' . $value . '" ><i class="ri-eye-fill align-bottom me-2 text-muted"></i>Details</a></li>';
            } else if ((string)$key === 'view') {
                $action_button_dropdown .= '<li><a href="javascript:void(0)" class="dropdown-item detail-button" data-id="' . $value . '"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>';
            } else if ((string)$key === 'delete') {
                $action_button_dropdown .= '<li><a href="javascript:void(0)"   data-id="' . $array['id'] . '" class="dropdown-item remove-item-btn delete-single"> <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a></li>';
            } else if ((string)$key === 'approve') {
                $action_button_dropdown .= '<a href="javascript:void(0)"   data-id="' . $array['id'] . '" class="dropdown-item approve-btn"> <i class="ri-check-double-fill align-bottom me-2 text-muted"></i>Approve</a>';
            } else if ((string)$key === 'reject') {
                $action_button_dropdown .= '<a href="javascript:void(0)"   data-id="' . $array['id'] . '" class="dropdown-item reject-btn"> <i class="ri-user-unfollow-fill align-bottom me-2 text-muted"></i>Reject</a>';
            }
        }
        $action_button_dropdown .= '</ul></div>';
        return $action_button_dropdown;
    }


    public static function editButton($array): string
    {
        return '<button data-href="' . $array['route'] . '"
             class="edit-button btn btn-primary  ' . trans('themes_setting.button_style') . '"
             data-toggle="tooltip"
             data-placement="top"
             title="' . trans('admin_string.common_edit') . '">
             <i class="fa fa-pencil-square align-middle"></i>
             </button>';
    }

    public static function showRedirectButton($array): string
    {
        return '<button data-href="' . $array['show_route'] . '"
             class="edit-button btn btn-success  ' . trans('themes_setting.button_style') . '"
             data-toggle="tooltip"
             data-placement="top"
             title="' . trans('admin_string.view') . '">
             <i class="fa fa-eye align-middle"></i>
             </button>';
    }

    public static function detailButton($array): string
    {
        return '<button data-id="' . $array['id'] . '"
             class="detail-button btn btn-sm btn-info"
             data-toggle="tooltip"
             data-placement="top"
             title="' . trans('messages.common_view') . '">
             <i class="ri-eye-fill align-bottom"></i>
             </button>';
    }

    public static function deleteButton($array): string
    {
        return '<button data-id="' . $array['id'] . '"
            class="delete-single btn btn-danger ' . trans('themes_setting.button_style') . '"
            data-toggle="tooltip"
            data-placement="top"
            title="' . trans('admin_string.common_delete') . '">
            <i class="fa fa-trash align-middle"></i>
            </button>';
    }

    public static function activeInactiveStatusButton($array): string
    {
        if ((string)$array['status'] === 'active') {
            return '<button data-id="' . $array['id'] . '"
            data-status="inActive" class="status-change btn btn-warning  ' . trans('themes_setting.button_style') . '"
            data-effect="effect-fall" data-toggle="tooltip"
            data-placement="top" title="' . trans('admin_string.common_status_inActive') . '" >
            <i class="fa fa-refresh font-size-16 align-middle"></i></button>';
        }
        return '<button data-id="' . $array['id'] . '"
        data-status="active" class="status-change btn btn-success btn-icon"
        data-effect="effect-fall" data-toggle="tooltip"
        data-placement="top" title="' . trans('admin_string.common_status_active') . '" >
        <i class="fa fa-refresh  align-middle"></i></button>';
    }

    public static function statusBadge($object): string
    {
        $status = '';
        if ((string)$object->status === 'active') {
            $status = '<span class="badge badge-soft-success status-change cursor-pointer" data-status="inactive" data-id="' . $object->page_id_no . '" >Active</span>';
        } elseif ((string)$object->status === 'inActive') {
            $status = '<span class="badge badge-soft-danger status-change cursor-pointer" data-status="active" data-id="' . $object->page_id_no . '" >inActive</span>';
        }
        return $status;
    }

    public static function serviceStatusBadge($object): string
    {
        $status = '';
        if ((string)$object->status === 'active') {
            $status = '<span class="badge badge-soft-success status-change cursor-pointer" data-status="inactive" data-id="' . $object->service_id_no . '" >Active</span>';
        } elseif ((string)$object->status === 'inActive') {
            $status = '<span class="badge badge-soft-danger status-change cursor-pointer" data-status="active" data-id="' . $object->service_id_no . '" >inActive</span>';
        }
        return $status;
    }
    public static function userStatusBadge($object): string
    {
        $status = '';
        if ((string)$object->status === 'active') {
            $status = '<span class="badge badge-soft-success status-change cursor-pointer" data-status="inactive" data-id="' . $object->id . '" >Active</span>';
        } elseif ((string)$object->status === 'inActive') {
            $status = '<span class="badge badge-soft-danger status-change cursor-pointer" data-status="active" data-id="' . $object->id . '" >inActive</span>';
        }
        return $status;
    }
}
